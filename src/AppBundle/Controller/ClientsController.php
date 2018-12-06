<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clients;
use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
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

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $em    = $this->get('doctrine.orm.entity_manager');
            $dql   = "SELECT a FROM AppBundle:Clients a";
            $query = $em->createQuery($dql);

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                8/*limit per page*/
            );
            $pagination->setCustomParameters([
                'align' => 'center'
            ]);
        } else {
            $em    = $this->get('doctrine.orm.entity_manager');
            $dql   = "SELECT a FROM AppBundle:Cliets a WHERE a.refereer=" . $this->getUser();
            $query = $em->createQuery($dql);

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                8/*limit per page*/
            );
            $pagination->setCustomParameters([
                'align' => 'center'
            ]);
        }

        return $this->render('clients/clients.html.twig',[
            'pagination' => $pagination,
            'func' => $this
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
            ->add('phone', TelType::class, [ 'attr' => [
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

            $client->setRefereer($this->getUser()->getId());

            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('clienti');

        }

        return $this->render('clients/clients.new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("clienti/modifica/{id}", name="modifica_cliente")
     */
    public function ClientsEditAction(Request $request,$id) {

        $client = $this->getDoctrine()->getRepository(Clients::class)->find($id);

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
                'label' => 'Modifica'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $client->setName($form->get('name')->getData());
            $client->setAddress($form->get('address')->getData());
            $client->setPostalCode($form->get('postal_code')->getData());
            $client->setCity($form->get('city')->getData());
            $client->setProvince($form->get('province')->getData());
            $client->setPhone($form->get('phone')->getData());
            $client->setEmail($form->get('email')->getData());
            $client->setPrivacyAccepted($form->get('privacy_accepted')->getData());

            return $this->redirectToRoute('clienti');

        }

        return $this->render('clients/clients.edit.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("clienti/elimina/{id}/{confirm}", name="elimina_clienti", defaults={ "confirm": false})
     */
    public function deleteClientAction($id, $confirm = false) {

        if ($confirm == false) {

            $client = $this->getDoctrine()->getRepository(Clients::class)->find($id);

            return $this->render('clients/delete.html.twig', [
                'client' => $client
            ]);
        } else {
            $this->addFlash('success', 'Cliente eliminato!');

            $client = $this->getDoctrine()->getRepository(Clients::class)->find($id);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($client);
            $entityManager->flush();

        }

        return $this->redirectToRoute('clienti');
    }

    public function convertUName($uname) {
        return $this->getDoctrine()->getRepository(Users::class)->find($uname);
    }
}