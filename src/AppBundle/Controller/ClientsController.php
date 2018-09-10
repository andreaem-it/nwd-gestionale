<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clients;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Email;

class ClientsController extends Controller
{
    /**
     * @Route("clienti/", name="clienti")
     */
    public function ClientsAction(Request $request) {

        $clients = $this->getDoctrine()->getRepository('AppBundle:Clients')->findAll();

        return $this->render('clients/clients.html.twig',[
            'clients' => $clients
        ]);
    }

    /**
     * @Route("clienti/vedi/{id}", name="vedi_clienti")
     */
    public function ClientsShowAction($id) {

        $client = $this->getDoctrine()->getRepository('AppBundle:Clients')->find($id);
        $expertations = $this->getDoctrine()->getRepository('AppBundle:Expertations')->findBy(['client' => $id]);

        return $this->render('clients/show.html.twig',[
            'client' => $client,
            'expertations' => $expertations
        ]);
    }

    /**
     * @Route("clienti/nuovo", name="nuovo_cliente")
     */
    public function ClientsNewAction(Request $request) {

        $client = new Clients();

        $form = $this->createFormBuilder($client)
            ->add('name', TextType::class,
                [ 'attr' => [
                    'class' => 'form-control'],
                'label' => 'Nome'
            ])
            ->add('address', TextType::class, [ 'attr' => [
                'class' => 'form-control'],
                'label' => 'Indirizzo'
            ])
            ->add('postal_code', TextType::class, [ 'attr' => [
                'class' => 'form-control'],
                'label' => 'CAP'
            ])
            ->add('city', TextType::class, [ 'attr' => [
                'class' => 'form-control'],
                'label' => 'Città'
            ])
            ->add('province', TextType::class, [ 'attr' => [
                'class' => 'form-control'],
                'label' => 'Provincia'
            ])
            ->add('phone', TextType::class, [ 'attr' => [
                'class' => 'form-control'],
                'label' => 'Telefono'
            ])
            ->add('email', EmailType::class, [ 'attr' => [
                'class' => 'form-control'],
                'label' => 'E-Mail'
            ])
            ->add('privacy_accepted', CheckboxType::class, [ 'attr' => [
                'class' => 'custom-control-input'],
                'required' => false,
                'label' => 'Privacy Accettata'
            ])
            ->add('submit', SubmitType::class, [ 'attr' => [
                'class' => 'btn btn-success float-right' ],
                'label' => 'Aggiungi'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {

            $client = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            $this->redirectToRoute('clienti');

        }

        return $this->render('clients/clients.new.html.twig',[
            'form' => $form->createView()
        ]);
    }
}