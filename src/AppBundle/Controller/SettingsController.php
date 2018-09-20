<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Groups;
use AppBundle\Entity\Users;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends Controller
{
    /**
     * @Route("impostazioni/generali/", name="impostazioni_generali")
     */
    public function SettingsGeneralAction(Request $request) {
        return $this->render('settings/settings.html.twig');
    }

    /**
     * @Route("impostazioni/utenti/", name="impostazioni_utenti")
     */
    public function SettingsUsersAction(Request $request) {
        return $this->render('settings/users.html.twig', [
        ]);
    }

    /**
     * @Route("impostazioni/utenti/nuovo", name="impostazioni_utenti_aggiungi")
     */
    public function AjaxSUAAction(Request $request, UserPasswordEncoderInterface $encoder) {
        $user = new Users();
        $user->setLastLogin(new \DateTime("now"));
        $user->setConfirmationToken('NWD-' . rand('1000000000','9999999999'));
        $user->setPasswordRequestedAt(new \DateTime("now"));
        $user->setEnabled(True);

        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class,['label' => 'Nome Utente', 'attr' => ['class' => 'form-control']])
            ->add('email', EmailType::class,['label' => 'E-Mail', 'attr' => ['class' => 'form-control']])
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Le due password devono essere uguali.',
                'options' => array('attr' => array('class' => 'form-control password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Ripeti Password'),
            ))
            ->add('roles', ChoiceType::class,
                ['choices' => [
                    'Utente' => 'ROLE_USER',
                    'Amministratore' => 'ROLE_ADMIN',
                    'Test' => 'ROLE_TEST'
                ], 'choice_attr' => ['form-control'],
                    'expanded' => true,
                    'multiple' => true,
                ], ['label' => 'Ruoli', 'attr' => ['class' => 'form-control mr-3']])
            ->add('submit', SubmitType::class,['label' => 'Aggiungi', 'attr' => ['class' => 'btn btn-success']])
            ->add('reset', ResetType::class, ['label' => 'Reset', 'attr' => ['class' => 'btn btn-warning']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $user->setUsernameCanonical($form->get('username')->getData());
            $user->setEmailCanonical($form->get('email')->getData());
            $user->setSalt(rand('100000000','999999999'));
            $encoded = $encoder->encodePassword($user, $form->get('password')->getData());
            $user->setPassword($encoded);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->redirectToRoute('impostazioni_utenti');
        }

        return $this->render('settings/ajax/user.add.form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("impostazioni/gruppi/", name="impostazioni_gruppi")
     */
    public function settingsGroupsAction(Request $request) {
        return $this->render('settings/groups.html.twig', [
        ]);
    }

    /**
     * @Route("impostazioni/gruppi/nuovo", name="impostazioni_gruppi_nuovo")
     */
    public function settingsGroupAddAction(Request $request) {
        $group = new Groups();
        $group->setIsActive(True);

        $form = $this->createFormBuilder($group)
            ->add('name', TextType::class,['label' => 'Nome Gruppo', 'attr' => ['class' => 'form-control']])
            ->add('level', ChoiceType::class,
                ['choices' => [
                    'Livello 1' => '1',
                    'Livello 2' => '2',
                    'Livello 3' => '3',
                    'Livello 4' => '4',
                    'Livello 5' => '5',
                ],
                    'choice_attr' => ['class' => 'form-control'],
                    'label' => 'Livello di Accesso',
                    'attr' => [
                        'class' => 'form-control'
                ]])
            ->add('components', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'username',
                'choice_value' => 'id',
                'choice_attr' => ['class' => 'form-control'],
                'label' => 'Componenti',
                'multiple' => true,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-control'
                ]])
            ->add('father', EntityType::class, [
                'class' => Groups::class,
                'choice_label' => 'name',
                'choice_attr' => ['class' => 'form-control'],
                'expanded' => false,
                'multiple' => false,
                'label' => 'Gruppo Padre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('childs', EntityType::class, [
                'class' => Groups::class,
                'choice_label' => 'name',
                'label_attr' => ['class' => 'mr-3'],
                'choice_attr' => ['class' => 'form-control ml-2'],
                'expanded' => false,
                'multiple' => true,
                'label' => 'Figli',
                'attr' => ['class' => 'form-control']
            ])
            ->add('submit', SubmitType::class,['label' => 'Aggiungi', 'attr' => ['class' => 'btn btn-success']])
            ->add('reset', ResetType::class, ['label' => 'Reset', 'attr' => ['class' => 'btn btn-warning']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            $this->redirectToRoute('impostazioni_gruppi');
        }

        return $this->render('settings/ajax/groups.add.form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("ajax/settings/users/list", name="ajax_settings_users_list")
     */
    public function AjaxSULAction() {
        $usersList = $this->getDoctrine()->getRepository('AppBundle:Users')->findAll();

        return $this->render('settings/ajax/users.list.html.twig', [
            'users' => $usersList
        ]);
    }

    /**
     * @Route("ajax/settings/groups/list", name="ajax_settings_groups_list")
     */
    public function AjaxSGLAction() {
        $groupsList = $this->getDoctrine()->getRepository(Groups::class)->findAll();

        return $this->render('settings/ajax/groups.list.html.twig', [
            'groups' => $groupsList
        ]);
    }

    /**
     * @Route("ajax/settings/users/delete/{id}", name="ajax_settings_users_delete")
     */
    public function AjaxSUDAction($id) {

    }
}
