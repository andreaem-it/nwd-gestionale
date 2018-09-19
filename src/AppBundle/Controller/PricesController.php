<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Types\FloatType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricesController extends Controller {
    /**
     * @Route("/prezzi/listino", name="prezzi_listino")
     */
    public function pricesListAction(Request $request)
    {

        return $this->render('prices/list.html.twig');
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