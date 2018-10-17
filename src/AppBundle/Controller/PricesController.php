<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PricesAdvanced;
use Doctrine\DBAL\Types\FloatType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\HttpFoundation\File\Exception\FileException;



class PricesController extends Controller {
    /**
     * @Route("/prezzi/listino", name="prezzi_listino")
     */
    public function pricesListAction(Request $request)
    {

        return $this->render('prices/list.html.twig');
    }


    /**
     * @Route("prezzi/prezzario", name="settings_prices")
     */
    public function settingsPricesAction(Request $request) {

        $yamlPath = Yaml::parseFile($this->container->getParameter('kernel.root_dir')."/config/settings.yml");

        $defaultData = array('file' => '');
        $form = $this->createFormBuilder($defaultData)
            ->add('prices_file', FileType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Importa',
                'attr' => ['class' => 'btn btn-success btn-block']
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $filename = $yamlPath['prices_file'];
            $filesystem = new Filesystem();
            $filesystem->remove($this->container->getParameter('kernel.root_dir') . "/data/" . $filename);

            $data = $form->getData()['prices_file'];

            $yaml = Yaml::dump($data);

            $fileName = hash_hmac('sha256', time(), 'thisisasecret') . '.csv';

            file_put_contents($this->container->getParameter('kernel.root_dir')."/config/settings.yml",
                ['prices_file : "' . $fileName . '"']);

            // Move the file to the directory where brochures are stored
            try {
                $data->move(
                    $this->getParameter('prices_directory'),
                    $fileName
                );
                $lexer = new Lexer(new LexerConfig());
                $interpreter = new Interpreter();
                $interpreter->addObserver(function(array $row) {

                    dump($row);
                    $priceAdv = new PricesAdvanced();
                    $repo = $this->getDoctrine()->getManager();

                    $priceAdv->setCode($row[0]);
                    $priceAdv->setDescription($row[1]);
                    $priceAdv->setPrice($row[3]);

                    $repo->persist($priceAdv);
                    $repo->flush();

                    // do something here.
                    // for example, insert $row to database.
                });
                $lexer->parse($this->container->getParameter('kernel.root_dir') . "/data/" . $fileName, $interpreter);
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
        }



        $prices = $this->getDoctrine()->getRepository(PricesAdvanced::class)->findAll();

        return $this->render('prices/prices.html.twig', [
            'prices' => $prices,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/ajax/prices/list", name="ajax_price_list")
     */
    public function AJAXPl() {
        $list = $this->getDoctrine()->getRepository('AppBundle:Prices')->findAll();

        return $this->render('prices/ajax/list.html.twig', [
            'items' => $list
        ]);
    }

    /** TODO: AJAX Price Edit with function onClick button and slim modal */
    /**
     * @Route("/prezzi/aggiorna/{id}", name="prezzi_aggiorna")
     */
    public function pricesUpdateAction(Request $request,$id) {

        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle:Prices')->findOneBy(array("id" => $id));

        $form = $this->createFormBuilder($item)
            /*->add('id', NumberType::class,[
                'attr' => [ 'hidden' => 'hidden']
                //'mapped' => false
            ])*/
            ->add('canonical', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Nome'
            ])
            ->add('price', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Prezzo'
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary'],
                'label' => 'Salva'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $this->addFlash('success', 'Prezzo aggiornato!');

            $item->setPrice($form->get('price')->getData());
            $item->setCanonical($form->get('canonical')->getData());

            $em->flush();

            return $this->redirectToRoute('prezzi_listino');
        }

        return $this->render('prices/edit.html.twig', [
           'form' => $form->createView()
        ]);

    }
}