<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clients;
use AppBundle\Entity\Expertation_Lines;
use AppBundle\Entity\Expertations;
use AppBundle\Entity\Outlets;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class ExpertationsController extends Controller
{
    /**
     * @Route("/preventivi/lista", name="lista_preventivi")
     */
    public function expertationsListAction(Request $request)
    {
        $expertations = $this->getDoctrine()->getRepository('AppBundle:Expertations')->findAll();

        return $this->render('expertations/list.html.twig', [
            'expertations' => $expertations,
            'functions' => $this,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/preventivi/mostra/{id}", name="mostra_preventivo")
     */
    public function expertationsShowAction($id) {

        $item = $this->getDoctrine()->getRepository('AppBundle:Expertations')->find($id);
        $client = $this->getDoctrine()->getRepository('AppBundle:Clients')->find($item->getClient());

        return $this->render('expertations/show.html.twig', [
            'functions' => $this,
            'item' => $item,
            'client' => $client
        ]);
    }

    /**
     * @Route("/preventivi/nuovo", name="nuovo_preventivo")
     */
    public function expertationsNewAction(Request $request) {

        $expertations = new Expertations();

        $form = $this->createFormBuilder($expertations)
            ->add('client', EntityType::class, [
                'class' => 'AppBundle:Clients',
                'placeholder' => '-- Seleziona --',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'label' => 'Cliente',
                'attr' => ['class' => 'form-control']
            ])
            ->add('tipo', ChoiceType::class, [
                'choices' => [
                    'Civile' => '1',
                    'Terziario' => '2'
                ],
                'label' => 'Tipo Impianto',
                'attr' => ['class' => 'form-control']
            ])
            ->add('kw', TextType::class, [
                'label' => 'Kw ENEL',
                'attr' => ['class' => 'form-control']
            ])
            ->add('piani_casa', TextType::class, [
                'label' => 'Piani',
                'attr' => ['class' => 'form-control']
            ])
            ->add('riscaldamento', ChoiceType::class, [
                'choices' => [
                    'Pavimento' => '1',
                    'Radiatori' => '2',
                    'Fancoil' => '3',
                    'Canalizzato' => '4',
                    'Split' => '5',
                    'Altro' => '6'
                ],
                'label' => 'Riscaldamento',
                'attr' => ['class' => 'form-control']
            ])
            ->add('opere_murarie', ChoiceType::class, [
                'choices' => [
                    'No' => '0',
                    'Intonaco' => '1',
                    'Mattone / Pietra' => '2'
                ],
                'label' => 'Opere Murarie',
                'attr' => ['class' => 'form-control']
            ])
            ->add('trifase', ChoiceType::class, [
                'choices' => [
                    'No' => '0',
                    'Si' => '1'
                ],
                'label' => 'Trifase',
                'attr' => ['class' => 'form-control']
            ])
            ->add('sconto', TextType::class, [
                'label' => 'Sconto %',
                'attr' => ['class' => 'form-control']
            ])
            ->add('level', ChoiceType::class, [
                'choices' => [
                    'Livello 1 - Base' => '1',
                    'Livello 2 - Standard' => '2',
                    'Livello 3 - Domotico' => '3'
                ],
                'label' => 'Livello Impianto',
                'label_attr' => ['class' => ''],
                'attr' => ['class' =>
                    'form-control col-sm-2',
                    'aria-describedby' => "button-addon",
                    'style' => 'min-width:100%'
                    ]
            ])
            ->add('square_meters', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'mq',
                    'style' => 'min-width: 100%'
                ],
                'label' => 'Metratura Abitazione',
                'label_attr' => ['class' => '']

            ])
            ->add('floor', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control']
                    ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('ambient', CollectionType::class, [
                'entry_type' => EntityType::class,
                'entry_options' => [
                    'class' => 'AppBundle:Rooms',
                    'placeholder' => '-- Seleziona --',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.name', 'DESC')->distinct()
                            ;},
                    'label' => false,
                    'choice_label' => 'name',
                    'attr' => ['class' => 'form-control']
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('name', CollectionType::class, [
                'entry_type' => TextType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control','style' => 'min-width:200px!important;','placeholder' => 'Inserisci un nome'],
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('pp', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control','min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('pl', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control', 'min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('pt', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control', 'min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-success mt-3 btn-block btn-lg'],
                'label' => 'Genera'
            ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $expertation = $form->getData();
            $expertations->setDate(New \DateTime("now"));
            $expertations->setClient(1);
            $expertations->setStatus(0);
            $expertations->setPrice(0);
            $expertations->setExpiration(New \DateTime("now"));

            $em = $this->getDoctrine()->getManager();
            $em->persist($expertation);
            $em->flush();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
            $json = $serializer->serialize($form->getData(), 'json');
            return new Response($json);
        }

        return $this->render('expertations/new.html.twig', [
            'form' => $form->createView(),
            //'form_expertation' => $form_expertation->createView()
        ]);
    }

    /**
     * @Route("preventivi/genera/", name="preventivi_genera")
     */
    public function generateExpertatationAction(Request $request) {

    }

    /**
     * @Route("ajax/expertations/get/outlets/{level}/{room}", name="ajax_get_expertations_room")
     */
    public function AjaxEGO($room, $level) {

        $outlets = $this->getDoctrine()->getManager()->getRepository('AppBundle:Outlets')->findBy(['roomId' => $room,'level' => $level]);

        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $json = $serializer->serialize($outlets, 'json');

        $response = new Response();
        $response->setContent($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @param $uid
     * @return mixed
     */
    public function uidToName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getName();
    }

    public function storeLines($object) {

        $repo = $this->getDoctrine()->getRepository('AppBundle:Expertation_lines');
    }

    public function plantIntToName($int) {
        switch ($int) {
            case 1 :
                return 'Civile';
                break;
            case 2 :
                return 'Terziario';
                break;
            default:
                return 'N.D.';
                break;
        }
    }

    public function heatingIntToName($int) {
        switch ($int) {
            case 1 :
                return 'Pavimento';
                break;
            case 2 :
                return 'Radiatori';
                break;
            case 3 :
                return 'Fancoil';
                break;
            case 4 :
                return 'Canalizzato';
                break;
            case 5 :
                return 'Split';
                break;
            case 6 :
                return 'Altro';
                break;
            default:
                return 'N.D.';
                break;
        }

    }

    public function unserializeThis($data,Serializer $serializer) {
        $serializer->deserialize($data, Expertations::class, 'json');
    }

    public function countArrayElements($item) {
        return count($item);
    }

    public function convertAIDtoName($aid) {
        return $this->getDoctrine()->getRepository('AppBundle:Rooms')->find($aid)->getName();
    }
}
