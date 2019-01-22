<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Clients;
use AppBundle\Entity\Expertations;
use AppBundle\Entity\ExpertationsAdvanced;
use AppBundle\Entity\ExpertationsAdvancedLines;
use AppBundle\Entity\Heatings;
use AppBundle\Entity\PricesAdvanced;
use AppBundle\Entity\Rooms;
use AppBundle\Entity\Users;
use AppBundle\Form\ExpertationsAdvancedType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class ExpertationsController extends Controller
{
    /**
     * @Route("/preventivi/lista", name="lista_preventivi")
     */
    public function expertationsListAction(Request $request)
    {
        $expertations = null;
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $uExpertations = null;
            $em    = $this->get('doctrine.orm.entity_manager');
            $dql   = "SELECT a FROM AppBundle:Expertations a ORDER BY a.pid DESC";
            $query = $em->createQuery($dql);

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );
            $pagination->setCustomParameters([
                'align' => 'center',
                'rounded' => true,
                ]);
        } else {
            $permission = $this->getDoctrine()->getRepository(Users::class)->findBy(['father' => $this->getUser()]);
            $expertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $permission[0]->getId()]);
            $uExpertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $this->getUser()]);
            if ($expertations == null) {
                $expertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $this->getUser()]);
            }
            $em    = $this->get('doctrine.orm.entity_manager');
            $dql   = "SELECT a FROM AppBundle:Expertations a WHERE a.created_by =" . $this->getUser() . " ORDER BY a.pid DESC";
            $query = $em->createQuery($dql);

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );
            $pagination->setCustomParameters([
                'align' => 'center',
                'rounded' => true,
            ]);
        }

        return $this->render('expertations/list.html.twig', [
            'expertations' => $expertations,
            'u_expertations' => $uExpertations,
            'pagination' => $pagination,
            'functions' => $this,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/preventivi/lista/{params}", name="lista_preventivi_cerca")
     */
    public function expertationsListSearchAction(Request $request, $params)
    {
        $expertations = null;
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $expertations = $this->getDoctrine()->getRepository(Expertations::class)->findAll();
            $uExpertations = null;
        } else {
            $permission = $this->getDoctrine()->getRepository(Users::class)->findBy(['father' => $this->getUser()]);
            $expertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $permission[0]->getId()]);
            $uExpertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $this->getUser()]);
            if ($expertations == null) {
                $expertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $this->getUser()]);
            }
        }

        return $this->render('expertations/list.html.twig', [
            'expertations' => $expertations,
            'u_expertations' => $uExpertations,
            'functions' => $this,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/preventivi/mostra/preventivo-{pid}", name="mostra_preventivo")
     */
    public function expertationsShowAction($pid) {

        $item = $this->getDoctrine()->getRepository('AppBundle:Expertations')->findOneBy(['pid' =>$pid]);

        $id = $item->getId();

        $client = $this->getDoctrine()->getRepository('AppBundle:Clients')->find($item->getClient());

        $advanced = $this->getDoctrine()->getRepository('AppBundle:ExpertationsAdvanced')->findBy(['father' => $id]);

        $gotAdv = null;
        if ($advanced) {
            $gotAdv = true;
        } else {
            $gotAdv = false;
        }

        return $this->render('expertations/show.html.twig', [
            'functions' => $this,
            'item' => $item,
            'generated' => TRUE,
            'client' => $client,
            'gotAdv' => $gotAdv
        ]);
    }

    /**
     * @Route("/preventivi/nuovo", name="nuovo_preventivo")
     */
    public function expertationsNewAction(Request $request) {

        $expertations = new Expertations();

        $lastExp = $this->getDoctrine()->getRepository(Expertations::class)->findLast()->getPid();
        $lastExp = (int)$lastExp + 1;
        if (strlen((string)$lastExp == 2)) {
            $lastExp = '00' . $lastExp;
        } elseif (strlen((string)$lastExp == 3)) {
            $lastExp = '0' . $lastExp;
        } else {
            $lastExp = '00' . $lastExp;
        }

        $form = $this->createFormBuilder($expertations)
            ->add('pid', TextType::class , [
                'label' => ' ID',
                'data' => $lastExp
            ])
            ->add('client', EntityType::class, [
                'class' => 'AppBundle:Clients',
                'placeholder' => '-- Seleziona --',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.refereer = :uid')
                        ->setParameter('uid', $this->getUser()->getId())
                        ->orderBy('u.finalName', 'ASC');
                },
                'choice_label' => 'final_name',
                'choice_value' => 'id',
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
            ->add('kw', NumberType::class, [
                'label' => 'Kw ENEL',
                'attr' => ['class' => 'form-control', 'style' => 'max-height: 35px;'],
                'data' => '0'
            ])
            ->add('piani_casa', TextType::class, [
                'label' => 'Piani',
                'attr' => ['class' => 'form-control'],
                'data' => '1'
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
            ->add('opere_murarie', CheckboxType::class, [
                'label' => 'Opere Murarie',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('opere_murarie_intonaco', CheckboxType::class, [
                'label' => 'Intonaco',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('opere_murarie_pietra', CheckboxType::class, [
                'label' => 'Pietra',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('antenna', CheckboxType::class, [
                'label' => 'Antenna pre-esistente',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('campanello', CheckboxType::class, [
                'label' => 'Campanello',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('allarme', CheckboxType::class, [
                'label' => 'Predisposizione Allarme',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('trifase', ChoiceType::class, [
                'choices' => [
                    'No' => '0',
                    'Si' => '1'
                ],
                'label' => 'Trifase',
            ])
            ->add('sconto', TextType::class, [
                'label' => 'Sconto %',
                'data' => 0,
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
                    'placeholder' => 'mq',
                    'style' => 'min-width: 100%'
                ],
                'label' => 'Metratura',
                'label_attr' => ['class' => '']
            ])
            ->add('num_infissi', IntegerType::class, [
                'data' => 0,
                'label' => 'Numero Infissi',
                'label_attr' => ['id' => 'form_num_infissi_label'],
                'attr' => ['class' => 'mt-2','style' => 'min-width:100%']
            ])
            ->add('num_circuiti', IntegerType::class, [
                'label' => 'Circuiti',
                'data' => '0'
            ])
            ->add('num_prese_dati', IntegerType::class, [
                'label' => 'Prese Dati',
                'data' => '0'
            ])
            ->add('num_prese_telefono', IntegerType::class, [
                'attr' => ['min' => '0'] ,
                'label' => 'Prese Tel',
                'data' => '0'
            ])
            ->add('illum_sicurezza', IntegerType::class, [
                'label' => 'Illuminazione Sicurezza',
                'data' => '0',
                'attr' => ['class' => '']
            ])
            ->add('lampada', CheckboxType::class, [
                'label' => 'Lampada fornita',
                'label_attr' => [],
                'required' => false,
                'attr' => ['class' => '']
            ])
            ->add('illum_esterna', CheckboxType::class, [
                'label' => 'Illuminazione Esterna',
                'label_attr' => [],
                'required' => false,
                'attr' => ['class' => '']
            ])
            ->add('spd', ChoiceType::class, [
                'choices' => [
                    'SPD ad arrivo linea, Tolleranza R1' => 1,
                    'SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni' => 2
                ],
                'attr' => ['class' => 'form-control'] ,
                'label' => 'SPD'
            ])
            ->add('cit_vid', ChoiceType::class, [
                'choices' => [
                    'Citofono' => 1,
                    'VideoCitofono' => 2,
                ],
                'attr' => ['class' => 'mt-2', 'style' => 'min-width:100%'] ,
                'label' => 'Citofono / VideoCitofono'
            ])
            ->add('imp_ausiliari', ChoiceType::class, [
                'choices' => [
                    'Campanello, citofono e videocitofono' => 1,
                    'Campanello, citofono e antintrusione, Controllo carichi' => 2,
                    'Campanello, citofono e antintrusione, Controllo carichi, Domotica' => 3
                ],
                'attr' => ['class' => 'form-control'] ,
                'label' => 'Impianti Ausiliari / Risparmio Energetico'
            ])
            ->add('floor', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'data' => 0
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
                            ->orderBy('u.name')->distinct()
                            ;},
                    'label' => false,
                    'choice_label' => 'name',
                    'choice_value' => 'id',
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('name', CollectionType::class, [
                'entry_type' => TextType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['style' => 'min-width:200px!important;','placeholder' => 'Inserisci un nome'],
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('pp', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['min' => 0, 'value' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('pl', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0, 'value' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('pt', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0, 'value' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
            ])
            ->add('c1v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0, 'value' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false
            ])
            ->add('c2v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0, 'value' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-success mt-3 btn-block btn-sm'],
                'label' => 'Genera'
            ])
            ->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $expertation = $form->getData();
            $expertations->setDate      (New \DateTime("now"));
            $expertations->setClient    ((string)$form->get('client')->getData());
            $expertations->setStatus    (0);
            $expertations->setPrice     (0);
            $expertations->setExpiration(New \DateTime("now"));
            $expertations->setCreatedBy($this->getUser()->getId());
            $expertations->setC1n("Punti di Comando");
            $expertations->setC2n("Tiranti");

            $em = $this->getDoctrine()->getManager();
            $em->persist($expertation);
            $em->flush();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
            $json = $serializer->serialize($form->getData(), 'json');
            return $this->redirectToRoute('mostra_preventivo', ['pid' => $expertations->getPid()]);
        }

        return $this->render('expertations/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/preventivi/modifica/{id}", name="modifica_preventivo")
     */
    public function expertationsEditAction(Request $request,$id) {

        $expertations = $this->getDoctrine()->getRepository(Expertations::class)->find($id);

        $form = $this->createFormBuilder($expertations)
            ->add('pid', TextType::class , [
                'label' => ' ID',
            ])
            ->add('client', EntityType::class, [
                'class' => 'AppBundle:Clients',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.refereer = :uid')
                        ->setParameter('uid', $this->getUser()->getId())
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'name',
                'choice_value' => 'id',
                'label' => 'Cliente',
                'attr' => ['class' => 'form-control'],
                'data' => $expertations->getClient()
            ])
            ->add('tipo', ChoiceType::class, [
                'choices' => [
                    'Civile' => '1',
                    'Terziario' => '2'
                ],
                'label' => 'Tipo Impianto',
                'attr' => ['class' => 'form-control']
            ])
            ->add('kw', NumberType::class, [
                'label' => 'Kw ENEL',
                'attr' => ['class' => 'form-control', 'style' => 'max-height: 35px;'],
                'data' => '0'
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
            ->add('opere_murarie', CheckboxType::class, [
                'label' => 'Opere Murarie',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('opere_murarie_intonaco', CheckboxType::class, [
                'label' => 'Intonaco',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('opere_murarie_pietra', CheckboxType::class, [
                'label' => 'Pietra',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false
            ])
            ->add('antenna', CheckboxType::class, [
                'label' => 'Antenna pre-esistente',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false,
                'data' => $this->convertToBool($expertations->getAntenna()),
            ])
            ->add('campanello', CheckboxType::class, [
                'label' => 'Campanello',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false,
                'data' => $this->convertToBool($expertations->getCampanello())
            ])
            ->add('allarme', CheckboxType::class, [
                'label' => 'Predisposizione Allarme',
                'label_attr' => ['class' => 'form-check-label'],
                'required' => false,
                'data' => $this->convertToBool($expertations->getAllarme())
            ])
            ->add('trifase', ChoiceType::class, [
                'choices' => [
                    'No' => '0',
                    'Si' => '1'
                ],
                'label' => 'Trifase',
            ])
            ->add('sconto', TextType::class, [
                'label' => 'Sconto %',
                'data' => $expertations->getSconto(),
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
                    'placeholder' => 'mq',
                    'style' => 'min-width: 100%'
                ],
                'label' => 'Metratura',
                'label_attr' => ['class' => '']
            ])
            ->add('num_infissi', IntegerType::class, [
                'data' => 0,
                'label' => 'Numero Infissi',
                'label_attr' => ['id' => 'form_num_infissi_label'],
                'attr' => ['class' => 'mt-2','style' => 'min-width:100%']
            ])
            ->add('num_circuiti', IntegerType::class, [
                'label' => 'Circuiti',
            ])
            ->add('num_prese_dati', IntegerType::class, [
                'label' => 'Prese Dati',
            ])
            ->add('num_prese_telefono', IntegerType::class, [
                'attr' => ['min' => '0'] ,
                'label' => 'Prese Tel',
            ])
            ->add('illum_sicurezza', IntegerType::class, [
                'label' => 'Illuminazione Sicurezza',
                'attr' => ['class' => ''],
            ])
            ->add('illum_esterna', CheckboxType::class, [
                'label' => 'Illuminazione Esterna',
                'label_attr' => [],
                'required' => false,
                'attr' => ['class' => ''],
                'data' => $this->convertToBool($expertations->getIllumEsterna())
            ])
            ->add('lampada', CheckboxType::class, [
                'label' => 'Lampada fornita',
                'label_attr' => [],
                'required' => false,
                'attr' => ['class' => ''],
                'data' => $this->convertToBool($expertations->getLampada())
            ])
            ->add('spd', ChoiceType::class, [
                'choices' => [
                    'SPD ad arrivo linea, Tolleranza R1' => 1,
                    'SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni' => 2
                ],
                'attr' => ['class' => 'form-control'] ,
                'label' => 'SPD'
            ])
            ->add('cit_vid', ChoiceType::class, [
                'choices' => [
                    'Citofono' => 1,
                    'VideoCitofono' => 2,
                ],
                'attr' => ['class' => 'mt-2', 'style' => 'min-width:100%'] ,
                'label' => 'Citofono / VideoCitofono'
            ])
            ->add('imp_ausiliari', ChoiceType::class, [
                'choices' => [
                    'Campanello, citofono e videocitofono' => 1,
                    'Campanello, citofono e antintrusione, Controllo carichi' => 2,
                    'Campanello, citofono e antintrusione, Controllo carichi, Domotica' => 3
                ],
                'attr' => ['class' => 'form-control'] ,
                'label' => 'Impianti Ausiliari / Risparmio Energetico'
            ])
            ->add('floor', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                ],
                'label' => false,
            ])
            ->add('ambient', CollectionType::class, [
                'entry_type' => EntityType::class,
                'entry_options' => [
                    'class' => 'AppBundle:Rooms',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.name')->distinct()
                            ;},
                    'label' => false,
                    'choice_label' => 'name',
                    'choice_value' => 'id',
                ],
                'label' => false,
                'attr' => ['class' => ''],

            ])
            ->add('name', CollectionType::class, [
                'entry_type' => TextType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['style' => 'min-width:200px!important;','placeholder' => 'Inserisci un nome'],
                ],
                'label' => false,
            ])
            ->add('pp', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['min' => 0]
                ],
                'label' => false,
            ])
            ->add('pl', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0]
                ],
                'label' => false,
            ])
            ->add('pt', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0]
                ],
                'label' => false,
            ])
            ->add('c1v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0]
                ],
                'label' => false,
                'required' => false
            ])
            ->add('c2v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => [ 'min' => 0]
                ],
                'label' => false,
                'required' => false
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-success mt-3 btn-block btn-sm'],
                'label' => 'Genera'
            ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $expertation = $form->getData();
            $expertations->setDate      (New \DateTime("now"));
            $expertations->setClient    ((string)$form->get('client')->getData());
            $expertations->setStatus    (0);
            $expertations->setPrice     (0);
            $expertations->setExpiration(New \DateTime("now"));
            $expertations->setCreatedBy($this->getUser()->getId());
            $expertations->setC1n("Punti di Comando");
            $expertations->setC2n("Tiranti");

            $em = $this->getDoctrine()->getManager();
            $em->persist($expertation);
            $em->flush();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
            $json = $serializer->serialize($form->getData(), 'json');
            return $this->redirectToRoute('mostra_preventivo', ['id' => $form->getData()->getId()]);
        }

        return $this->render('expertations/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("preventivi/dettaglio/{id}", name="preventivi_dettaglio_id")
     */
    public function detailsAction($id) {

        $repo = $this->getDoctrine()->getRepository(Expertations::class);
        $item = $repo->find($id);
        $price = $this->getDoctrine()->getRepository(PricesAdvanced::class);

        $qtyPL = array_sum($item->getPl());
        $qtyPC = array_sum($item->getC1v());
        $qtyPP = array_sum($item->getPp());
        $qtyPT = array_sum($item->getPt());
        $qtyTR = array_sum($item->getC2v());
        $qtyTP = $item->getNumPreseTelefono();
        $qtyPD = $item->getNumPreseDati();
        $calcTVCable = 10 * $item->getPianiCasa();
        if ($qtyTP > 5) {
            $calcTPCable = 30 + (35 * $qtyPT * 0.15);
        } elseif ($qtyTP == 0) {
            $calcTPCable = 0;
        } else {
            $calcTPCable = 30 + (35 * $qtyPT * 0.1);
        }

        $prices = array();

        /** Punti Luce */
        array_push($prices,($qtyPL * $price->findByCode('15.1.12.2')));
        array_push($prices,($qtyPL * $price->findByCode('15.1.1')));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices,$qtyPL * $price->findByCode('15.1.3.1'));
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices,$qtyPL * $price->findByCode('15.1.4.1'));
            }
            if ($item->getOpereMurariePietra() == 1) {
                array_push($prices,$qtyPL * $price->findByCode('15.1.5.1'));
            }
        }

        /** Punti Comando */
        array_push($prices,($qtyPC * $price->findByCode('15.1.15.1')));
        array_push($prices,($qtyPC * $price->findByCode('15.1.2')));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices,$qtyPC * $price->findByCode('15.1.3.2'));
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices,$qtyPC * $price->findByCode('15.1.4.2'));
            }
            if ($item->getOpereMurariePietra() == 1) {
                array_push($prices,$qtyPC * $price->findByCode('15.1.5.2'));
            }
        }

        /** Punti comando Aggiuntivi */

        /** Estrattore */



        /** Punti Prese */
        array_push($prices, ($qtyPP * $price->findByCode('15.2.21.1')));
        array_push($prices, ($qtyPP * $price->findByCode('15.2.1')));
        array_push($prices, ($qtyPP * $price->findByCode('15.2.41.3')));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices,$qtyPP * $price->findByCode('15.2.2'));
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices,$qtyPP * $price->findByCode('15.2.3'));
            }
            if ($item->getOpereMurariePietra() == 1) {
                array_push($prices,$qtyPP * $price->findByCode('15.2.4'));
            }
        }

        /** Prese di Servizio */
        $qtyPS = [
            $item->getNumPreseDati(),       // Prese Dati
            $item->getNumPreseTelefono(),   // Prese Telefono
            array_sum($item->getPt()),      // Prese TV
            array_sum($item->getC2v()),     // Tiranti
            '1',                            // Ronzatori
            '1'                             // Suonerie
        ];
        /** Predisposizione Lamapada di Emergenza **/
        if ($item->getLampada() != 0 ) { array_push($qtyPL, '1'); }
        $qtyPS = array_sum($qtyPS);
        array_push($prices,$qtyPS * $price->findByCode('15.3.10'));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, ($qtyPS * $price->findByCode('15.3.20.1')));
        } elseif ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyPS * $price->findByCode('15.3.20.2')));
        }
        if ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyPS * $price->findByCode('15.3.20.3')));
        }

        /** Prese TV & Antenna */
        if($item->getAntenna() == 1) {
            array_push($prices, (1 * $price->findByCode('15.3.151.2')));
        }
        if ($qtyPT < 5 ) {
            array_push($prices, (1 * $price->findByCode('15.3.162.1')));
        } elseif ($qtyPT > 6 and $qtyPT < 10) {
            array_push($prices, (1 * $price->findByCode('15.3.162.2')));
        } elseif ($qtyPT < 11 and $qtyPT < 15 ) {
            array_push($prices, (1 * $price->findByCode('15.3.162.3')));
        }
        array_push($prices, ($qtyPT * $price->findByCode('15.3.110.1')));
        array_push($prices, ($calcTVCable * $price->findByCode('15.4.230')));

        /** Prese Telefoniche */
        if ($item->getNumPreseTelefono() != 0 ) {
            array_push($prices, $qtyTP * $price->findByCode('15.3.210.1'));
            array_push($prices, $calcTPCable * $price->findByCode('15.4.240.1'));
            /*if ($item->getOpereMurarie() == 1) {
                array_push($prices, ($qtyTP * $price->findByCode('15.3.20.1')));
            } elseif ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, ($qtyTP * $price->findByCode('15.3.20.2')));
            }
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, ($qtyTP * $price->findByCode('15.3.20.3')));
            }*/
        }

        /** Prese Dati */
        if ($item->getNumPreseDati() != 0 ) {
            array_push($prices, $qtyPD * $price->findByCode('15.3.220.6'));
        }

        /** Impianto Citofonico */
        array_push($prices, 2 * $price->findByCode('15.3.52.1'));

        /** Orologio Astronomico */
        if($item->getIllumEsterna() == 1) {
            array_push($prices, 1 * $price->findByCode('15.6.170.39'));
        }

        /** Punti di servizio Termico */
        $qtyPST = 1 + $item->getPianiCasa();
        array_push($prices, $qtyPST * $price->findByCode('15.3.10'));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, ($qtyTP * $price->findByCode('15.3.20.1')));
        } elseif ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyTP * $price->findByCode('15.3.20.2')));
        }
        if ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyTP * $price->findByCode('15.3.20.3')));
        }

        /** Allaccio Caldaia o Pompa di Calore */
        array_push($prices, 1 * $price->findByCode('13.21.40.1'));

        /** Allaccio Collettori */
        array_push($prices, $item->getPianiCasa() * $price->findByCode('13.21.10'));

        /** Centralino */
        array_push($prices, 1 * $price->findByCode('15.6.220.3'));

        /** Magnetotermico */
        array_push($prices, $item->getNumCircuiti() * $price->findByCode('15.6.52.1'));

        /** Sezionatore Quadro */
        array_push($prices, 1 * $price->findByCode('15.6.10.8'));

        /** Dorsali */
        array_push($prices, $item->getPianiCasa() * $price->findByCode('15.4.110.12') * 15 * 3);

        /** Corrugati */
        array_push($prices, $item->getPianiCasa() * $price->findByCode('15.5.10.3') * 15 * 2);
        array_push($prices, $item->getPianiCasa() * $price->findByCode('15.5.10.4') * 15 * 2);
        array_push($prices,$item->getPianiCasa() * $price->findByCode('15.5.180.1') * 4);
        array_push($prices,$item->getPianiCasa() * $price->findByCode('15.5.180.2') * 2 * 3);

        /** Scatole */
        array_push($prices,$item->getPianiCasa() * $price->findByCode('15.5.80.8'));

        /** Ingresso fornitura */
        array_push($prices,20 * $price->findByCode('15.4.21.40'));

        /** Impianto di messa a terra */
        array_push($prices, 20 * $price->findByCode('15.4.110.10'));
        if ($item->getSpd() == 1) {
            array_push($prices,$price->findByCode('15.7.204.4') * 1);
        } else {
            array_push($prices,($price->findByCode('15.7.204.4')) + ($price->findByCode('15.7.204.4')) * 1);
        }

        /** Puntale a croce */
        array_push($prices, $price->findByCode('15.7.60.1'));

        /** Relè e alimentatori */
        if($item->getLevel() == 3) {
            array_push($prices, $price->findByCode('15.6.170.31') * 1 );
            array_push($prices, $price->findByCode('15.6.170.44') * 1);
        }

        /** Nodo Equipotenziale */
        if ($item->getOpereMurarie() == 0) {
            array_push($prices, $price->findByCode('15.2.160.1'));
        } else {
            array_push($prices, $price->findByCode('15.2.160.2'));
        }

        /** Scaricatore */
        if ($item->getTrifase() == 0) {
            array_push($prices, $price->findByCode('15.7.201'));
        } else {
            array_push($prices, 3 * $price->findByCode('15.7.202'));
        }
        array_push($prices, $price->findByCode('15.7.202'));
        if ($item->getLevel() == 3) {
            if ($item->getTrifase() == 0) {
                array_push($prices, $price->findByCode('15.7.204.4'));
            } else {
                array_push($prices, $price->findByCode('15.7.204.2'));
            }
        }

        /** Tiranti */
        if ($qtyTR != 0) {
            array_push($prices, $price->findByCode('15.3.40.1'));
            array_push($prices, $price->findByCode('15.3.90'));
        }

        /** Segnalatore Acustico */
        if ($item->getCampanello() != 0) {
            array_push($prices, (1 * $price->findByCode('15.3.80.4')));
            array_push($prices, (1 * $price->findByCode('15.3.90')));
        }

        $total = (array_sum($prices));
        $sconto = $total * $item->getSconto() / 100;

        //$vat = ($total - $sconto) * 22 / 100;

        $item->setPrice($total);
        $this->getDoctrine()->getManager()->persist($item);
        $this->getDoctrine()->getManager()->flush();

        return $this->render('expertations/details.html.twig',[
            'item' => $item,
            'qtyPL' => $qtyPL,
            'qtyPC' => $qtyPC,
            'qtyPP' => $qtyPP,
            'qtyPT' => $qtyPT,
            'qtyTP' => $qtyTP,
            'qtyTR' => $qtyTR,
            'qtyPS' => $qtyPS,
            'qtyPD' => $qtyPD,
            'qtyPST' => $qtyPST,
            'total' => $total,
            'calcTPCable' => $calcTPCable,
            'calcTVCable' => $calcTVCable,
            'vat' => $vat = 0,
            'sconto' => $sconto
        ]);
    }

    /**
     * @Route("preventivi/avanzato/mostra/preventivo-{pid}", name="mostra_preventivo_avanzato")
     */
    public function showExpertationAdvancedAction($pid) {

            $data = $this->getDoctrine()->getRepository(Expertations::class)->findOneBy(['pid' => $pid]);
            $id = $data->getPid();
            $item = $this->getDoctrine()->getRepository(ExpertationsAdvanced::class)->findBy(['father' => $id]);

        if($item != null) {

            $total = 0;

            for($i = 1; $i <= 64; $i++) {
                $array = $item[0]->{"getVal{$i}"}();

                $return = is_array($array) ? array_sum($array) : 0;

                $code = $this->getDoctrine()->getRepository(ExpertationsAdvancedLines::class)->find($i);
                $price = $this->getDoctrine()->getRepository(PricesAdvanced::class)->findBy(['code' => $code->getCode()]);

                $lineTotal = $return * $price[0]->getPrice();
                $total = $lineTotal + $total;

            }

            return $this->render('expertations/show.advanced.html.twig',[
                'item' => $item,
                'data' => $data,
                'func' => $this,
                'total' => $total
            ]);
        } else {
            //throw new NotFoundHttpException('Preventivo non ancora generato');
            return $this->redirectToRoute('error_id', ['error' => 0001]);
        }
    }

    /**
     * @Route("preventivi/avanzato/nuovo/preventivo-{id}", name="nuovo_preventivo_avanzato")
     */
    public function newExpertationAdvancedAction(Request $request,$id) {

        /*if($this->getDoctrine()->getRepository(ExpertationsAdvanced::class)->findBy(['father' => $id])) {
            return $this->redirectToRoute('mostra_preventivo_avanzato', ['pid' => $id]);
        } else {*/
            $item = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['pid' => $id]);
            /*$qb = $this->getDoctrine()->getRepository(Expertations::class)->createQueryBuilder('exp');
            $qb ->select('exp')
                ->where('exp.pid', ':id')
                ->setParameter('id', $id);
            $item = $qb->getQuery()->getSingleResult();*/
            dump($item);

            //$expertationsAdvanced = $this->getDoctrine()->getRepository(ExpertationsAdvanced::class);
            $floor = 0;

            $expertationsAdvanced = new ExpertationsAdvanced();

            $pid = $this->convertPID($id);
            $ambientsCount = $this->getDoctrine()->getRepository(Expertations::class)->find($pid)->getAmbient();

            $titles = $this->getDoctrine()->getRepository(ExpertationsAdvancedLines::class)->findAll();

            //$check = $this->getDoctrine()->getRepository(ExpertationsAdvancedLines::class)->findOneBy(['father' => $id]);

            //if ($check === null) {

            $form = $this->createForm(ExpertationsAdvancedType::class, $expertationsAdvanced)
                ->add('submit', SubmitType::class, [
                    'label' => 'Genera',
                    'attr' => [
                        'class' => 'btn btn-success btn-block btn-sm mt-3   ',
                        //'style' => 'display:none'
                    ]
                ]);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $expAdv = $form->getData();

                $expAdv->setFather($item[0]->getPid());
                $expAdv->setFatherFloor($floor);
                $expAdv->setVal1(explode(',', $form->getData()->getVal1()));
                $expAdv->setVal2(explode(',', $form->getData()->getVal2()));
                $expAdv->setVal3(explode(',', $form->getData()->getVal3()));
                $expAdv->setVal4(explode(',', $form->getData()->getVal4()));
                $expAdv->setVal5(explode(',', $form->getData()->getVal5()));
                $expAdv->setVal6(explode(',', $form->getData()->getVal6()));
                $expAdv->setVal7(explode(',', $form->getData()->getVal7()));
                $expAdv->setVal8(explode(',', $form->getData()->getVal8()));
                $expAdv->setVal9(explode(',', $form->getData()->getVal9()));
                $expAdv->setVal10(explode(',', $form->getData()->getVal10()));
                $expAdv->setVal11(explode(',', $form->getData()->getVal11()));
                $expAdv->setVal12(explode(',', $form->getData()->getVal12()));
                $expAdv->setVal13(explode(',', $form->getData()->getVal13()));
                $expAdv->setVal14(explode(',', $form->getData()->getVal14()));
                $expAdv->setVal15(explode(',', $form->getData()->getVal15()));
                $expAdv->setVal16(explode(',', $form->getData()->getVal16()));
                $expAdv->setVal17(explode(',', $form->getData()->getVal17()));
                $expAdv->setVal18(explode(',', $form->getData()->getVal18()));
                $expAdv->setVal19(explode(',', $form->getData()->getVal19()));
                $expAdv->setVal20(explode(',', $form->getData()->getVal20()));
                $expAdv->setVal21(explode(',', $form->getData()->getVal21()));
                $expAdv->setVal22(explode(',', $form->getData()->getVal22()));
                $expAdv->setVal23(explode(',', $form->getData()->getVal23()));
                $expAdv->setVal24(explode(',', $form->getData()->getVal24()));
                $expAdv->setVal25(explode(',', $form->getData()->getVal25()));
                $expAdv->setVal26(explode(',', $form->getData()->getVal26()));
                $expAdv->setVal27(explode(',', $form->getData()->getVal27()));
                $expAdv->setVal28(explode(',', $form->getData()->getVal28()));
                $expAdv->setVal29(explode(',', $form->getData()->getVal29()));
                $expAdv->setVal30(explode(',', $form->getData()->getVal30()));
                $expAdv->setVal31(explode(',', $form->getData()->getVal31()));
                $expAdv->setVal32(explode(',', $form->getData()->getVal32()));
                $expAdv->setVal33(explode(',', $form->getData()->getVal33()));
                $expAdv->setVal34(explode(',', $form->getData()->getVal34()));
                $expAdv->setVal35(explode(',', $form->getData()->getVal35()));
                $expAdv->setVal36(explode(',', $form->getData()->getVal36()));
                $expAdv->setVal37(explode(',', $form->getData()->getVal37()));
                $expAdv->setVal38(explode(',', $form->getData()->getVal38()));
                $expAdv->setVal39(explode(',', $form->getData()->getVal39()));
                $expAdv->setVal40(explode(',', $form->getData()->getVal40()));
                $expAdv->setVal41(explode(',', $form->getData()->getVal41()));
                $expAdv->setVal42(explode(',', $form->getData()->getVal42()));
                $expAdv->setVal43(explode(',', $form->getData()->getVal43()));
                $expAdv->setVal44(explode(',', $form->getData()->getVal44()));
                $expAdv->setVal45(explode(',', $form->getData()->getVal45()));
                $expAdv->setVal46(explode(',', $form->getData()->getVal46()));
                $expAdv->setVal47(explode(',', $form->getData()->getVal47()));
                $expAdv->setVal48(explode(',', $form->getData()->getVal48()));
                $expAdv->setVal49(explode(',', $form->getData()->getVal49()));
                $expAdv->setVal50(explode(',', $form->getData()->getVal50()));
                $expAdv->setVal51(explode(',', $form->getData()->getVal51()));
                $expAdv->setVal52(explode(',', $form->getData()->getVal52()));
                $expAdv->setVal53(explode(',', $form->getData()->getVal53()));
                $expAdv->setVal54(explode(',', $form->getData()->getVal54()));
                $expAdv->setVal55(explode(',', $form->getData()->getVal55()));
                $expAdv->setVal56(explode(',', $form->getData()->getVal56()));
                $expAdv->setVal57(explode(',', $form->getData()->getVal57()));
                $expAdv->setVal58(explode(',', $form->getData()->getVal58()));
                $expAdv->setVal59(explode(',', $form->getData()->getVal59()));
                $expAdv->setVal60(explode(',', $form->getData()->getVal60()));
                $expAdv->setVal61(explode(',', $form->getData()->getVal61()));
                $expAdv->setVal62(explode(',', $form->getData()->getVal62()));
                $expAdv->setVal63(explode(',', $form->getData()->getVal63()));
                $expAdv->setVal64(explode(',', $form->getData()->getVal64()));


                $em = $this->getDoctrine()->getManager();
                $em->persist($expAdv);
                $em->flush();

                return $this->redirectToRoute('mostra_preventivo_avanzato', [
                    'pid' => $id
                ]);

            }

            return $this->render('expertations/new.advanced.html.twig', [
                'form' => $form->createView(),
                'item' => $item,
                'titles' => $titles,
                'func' => $this,
                'count' => $ambientsCount,
                'url' => $_SERVER['REQUEST_URI'],
                'floor' => $floor
            ]);
        }
    //}

    /**
     * @Route("preventivi/dettaglio/avanzato/preventivo-{pid}", name="preventivi_dettaglio_avanzato_id")
     */
    public function detailsAdvancedAction($pid)
    {

        $repo = $this->getDoctrine()->getRepository(Expertations::class);
        $item = $repo->findOneBy(['pid' => $pid]);
        $repoAdv = $this->getDoctrine()->getRepository(ExpertationsAdvanced::class);
        $id = $this->convertPID($pid);
        $itemAdv = $repoAdv->findOneBy(['father' => $id]);
        $price = $this->getDoctrine()->getRepository(PricesAdvanced::class);

        $qtyPL = array_sum($item->getPl());
        $qtyPC = array_sum($item->getC1v());
        $qtyPP = array_sum($item->getPp());
        $qtyPP = $qtyPP + array_sum($itemAdv->getVal2()) + array_sum($itemAdv->getVal5());
        $qtyPT = array_sum($item->getPt());
        $qtyTR = array_sum($item->getC2v());
        $qtyTP = array_sum($itemAdv->getVal33());
        $qtyPD = $item->getNumPreseDati();
        $calcTVCable = 10 * $item->getPianiCasa();

        if ($qtyTP > 5) {
            $calcTPCable = 30 + (35 * 0.15 * $qtyTP);
        } elseif ($qtyTP <= 5) {
            $calcTPCable = 30 + (35 * 0.1 * $qtyTP);
        } elseif ($qtyTP == 0) {
            $calcTPCable = 0;
        }

        $prices = array();

        $itemsAdvArray = array();

        array_push($itemsAdvArray, null);
        array_push($itemsAdvArray, array_sum($itemAdv->getVal1()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal2()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal3()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal4()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal5()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal6()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal7()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal8()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal9()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal10()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal11()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal12()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal13()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal14()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal15()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal16()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal17()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal18()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal19()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal20()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal21()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal22()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal23()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal24()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal25()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal26()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal27()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal28()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal29()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal30()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal31()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal32()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal33()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal34()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal35()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal36()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal37()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal38()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal39()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal40()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal41()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal42()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal43()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal44()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal45()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal46()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal47()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal48()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal49()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal50()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal51()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal52()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal53()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal54()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal55()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal56()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal57()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal58()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal59()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal60()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal61()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal62()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal63()));
        array_push($itemsAdvArray, array_sum($itemAdv->getVal64()));

        /** Punti Luce */
        if ($itemAdv->getVal13() > 0) {
            $qtyPL = ($qtyPL + array_sum($itemAdv->getVal13()));
        }
        array_push($prices, ($qtyPL * $price->findByCode('15.1.12.2')));
        array_push($prices, ($qtyPL * $price->findByCode('15.1.1')));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, $qtyPL * $price->findByCode('15.1.3.1'));
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, $qtyPL * $price->findByCode('15.1.4.1'));
            }
            if ($item->getOpereMurariePietra() == 1) {
                array_push($prices, $qtyPL * $price->findByCode('15.1.5.1'));
            }
        }

        /** Punti Comando */
        array_push($prices, ($qtyPC * $price->findByCode('15.1.15.1')));
        array_push($prices, ($qtyPC * $price->findByCode('15.1.2')));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, $qtyPC * $price->findByCode('15.1.3.2'));
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, $qtyPC * $price->findByCode('15.1.4.2'));
            }
            if ($item->getOpereMurariePietra() == 1) {
                array_push($prices, $qtyPC * $price->findByCode('15.1.5.2'));
            }
        }
        /** Punti Comando Aggiuntivi */
        if ($itemAdv->getVal7() > 0) {
            array_push($prices, array_sum($itemAdv->getVal7()) * $price->findByCode('15.1.15.2'));
        }

        /** Punti Prese */
        array_push($prices, ($qtyPP * $price->findByCode('15.2.21.1')));
        array_push($prices, ($qtyPP * $price->findByCode('15.2.1')));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, $qtyPP * $price->findByCode('15.2.2'));
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, $qtyPP * $price->findByCode('15.2.3'));
            }
            if ($item->getOpereMurariePietra() == 1) {
                array_push($prices, $qtyPP * $price->findByCode('15.2.4'));
            }
        }
        if (array_sum($itemAdv->getVal3()) > 0) {
            array_push($prices, array_sum($itemAdv->getVal3()) * $price->findByCode('15.2.41.2'));
        }
        if (array_sum($itemAdv->getVal4()) > 0) {
            array_push($prices, array_sum($itemAdv->getVal4()) * $price->findByCode('15.2.41.3'));
            array_push($prices, array_sum($itemAdv->getVal4()) * $price->findByCode('15.2.80.2'));
        }
        if (array_sum($itemAdv->getVal5()) > 0) {
            array_push($prices, array_sum($itemAdv->getVal5()) * $price->findByCode('15.2.42'));
        }

        /** Prese di Servizio */
        $qtyPS = [
            array_sum($itemAdv->getVal39()),// Prese Dati
            array_sum($itemAdv->getVal33()),// Prese Telefono
            //array_sum($item->getPt()),      // Prese TV
            array_sum($itemAdv->getVal43()),// Frutti prese TV
            array_sum($itemAdv->getVal41()),// Tiranti
            array_sum($itemAdv->getVal42()),// Ronzatori
            array_sum($itemAdv->getVal38()),// Campanello
            array_sum($itemAdv->getVal34()),// Citofono Interno
            array_sum($itemAdv->getVal35()),// Citofono Esterno
            array_sum($itemAdv->getVal36()),// VideoCitofono Interno
            array_sum($itemAdv->getVal44()),// Satellite
            array_sum($itemAdv->getVal46()),// Parabola
            array_sum($itemAdv->getVal45()),// Antenna Terrestre
            array_sum($itemAdv->getVal32()), // Centralino Telefonico
            array_sum($itemAdv->getVal12()), // Contatti Porta
        ];
        /** Predisposizione Lamapada di Emergenza **/
        if ($item->getLampada() != 0) {
            array_push($qtyPS, '1');
        }
        $qtyPS = array_sum($qtyPS);

        array_push($prices, $qtyPS * $price->findByCode('15.3.10'));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, ($qtyPS * $price->findByCode('15.3.20.1')));
        } elseif ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyPS * $price->findByCode('15.3.20.2')));
        }
        if ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyPS * $price->findByCode('15.3.20.3')));
        }

        /** Prese TV & Antenna */
        if ($item->getAntenna() == 1) {
            array_push($prices, (1 * $price->findByCode('15.3.151.2')));
        }
        if ($qtyPT < 5) {
            array_push($prices, (1 * $price->findByCode('15.3.161.1')));
        } elseif ($qtyPT > 6 and $qtyPT < 10) {
            array_push($prices, (1 * $price->findByCode('15.3.161.2')));
        } elseif ($qtyPT < 11 and $qtyPT < 15) {
            array_push($prices, (1 * $price->findByCode('15.3.161.3')));
        }
        array_push($prices, ($qtyPT * $price->findByCode('15.3.110.1')));
        array_push($prices, ($calcTVCable * $price->findByCode('15.4.230')));

        /** Tiranti */
        if ($qtyTR != 0) {
            array_push($prices, $price->findByCode('15.3.40.1'));
            array_push($prices, $price->findByCode('15.3.90'));
        }

        /** Prese Telefoniche */
        if ($item->getNumPreseTelefono() != 0) {
            array_push($prices, $qtyTP * $price->findByCode('15.3.210.1'));
            array_push($prices, $calcTPCable * $price->findByCode('15.4.240.1'));
            /*if ($item->getOpereMurarie() == 1) {
                array_push($prices, ($qtyTP * $price->findByCode('15.3.20.1')));
            } elseif ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, ($qtyTP * $price->findByCode('15.3.20.2')));
            }
            if ($item->getOpereMurarieIntonaco() == 1) {
                array_push($prices, ($qtyTP * $price->findByCode('15.3.20.3')));
            }*/
        }

        /** Prese Dati */
        /*if ($item->getNumPreseDati() != 0 ) {
            array_push($prices, $qtyPD * $price->findByCode('15.3.220.6'));
        }*/

        /** Impianto Citofonico */
        //array_push($prices, 2 * $price->findByCode('15.3.52.1'));

        /** Orologio Astronomico */
        if ($item->getIllumEsterna() == 1) {
            array_push($prices, 1 * $price->findByCode('15.6.170.39'));
        }

        /** Lampade Emergenza */
        if ($itemsAdvArray[14] > 0) {
            array_push($prices, $itemsAdvArray[14] * $price->findByCode('15.8.180.1'));
        }

        /** Punti di servizio Termico */
        $qtyPST = array_sum($itemAdv->getVal18()) + array_sum($itemAdv->getVal19());
        array_push($prices, $qtyPST * $price->findByCode('15.3.10'));
        if ($item->getOpereMurarie() == 1) {
            array_push($prices, ($qtyTP * $price->findByCode('15.3.20.1')));
        } elseif ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyTP * $price->findByCode('15.3.20.2')));
        }
        if ($item->getOpereMurarieIntonaco() == 1) {
            array_push($prices, ($qtyTP * $price->findByCode('15.3.20.3')));
        }

        /** Allaccio Termostati */
        array_push($prices, $item->getPianiCasa() * $price->findByCode('13.21.10'));

        /** Termostato */
        if (array_sum($itemAdv->getVal20()) == 0) {
            array_push($prices, 1 * $price->findByCode('13.19.10.4'));
        } elseif (array_sum($itemAdv->getVal20()) == 1) {
            array_push($prices, 1 * $price->findByCode('13.19.10.4'));
        }
        if (array_sum($itemAdv->getVal20()) > 1) {
            array_push($prices, 2 * $price->findByCode('13.19.10.4'));
        }

        /** Allaccio Condizionatori */
        if ($itemAdv->getVal17() < 0) {
            array_push($prices, ($itemAdv->getVal17() * $price->findByCode('13.21.40.1')));
        }

        /** Allaccio Caldaia o Pompa di Calore */
        if (array_sum($itemAdv->getVal18()) > 1) {
            array_push($prices, array_sum($itemAdv->getVal18()) * $price->findByCode('13.21.40.1'));
        }

        /** Allaccio Collettori */
        if (array_sum($itemAdv->getVal19()) > 1) {
            array_push($prices, array_sum($itemAdv->getVal19()) * $price->findByCode('13.21.10.1'));
        }

        /** Testine */
        if (array_sum($itemAdv->getVal17()) > 0) {
            array_push($prices, array_sum($itemAdv->getVal17()) * $price->findByCode('15.2.70.7'));
        } else {
            array_push($prices, number_format($item->getSquareMeters() / 9, 0) * $price->findByCode('15.2.70.7'));
        }

        /** Centralino */
        if ($itemsAdvArray[22] > 0) {
            array_push($prices, 1 * $price->findByCode('15.6.220.1'));
        }
        if ($itemsAdvArray[23] > 0) {
            array_push($prices, 1 * $price->findByCode('15.6.220.3'));
        }
        if ($itemsAdvArray[24] > 0) {
            array_push($prices, 1 * $price->findByCode('15.6.220.4'));
        }
        if ($itemsAdvArray[25] > 0) {
            array_push($prices, 1 * $price->findByCode('15.6.220.5'));
        }

        /** Sezionatore Quadro */
        $sezVal = $itemsAdvArray[22] + $itemsAdvArray[23] + $itemsAdvArray[24] + $itemsAdvArray[25];
        array_push($prices, $sezVal * $price->findByCode('15.6.10.8'));

        /** Magnetotermico */
        array_push($prices, $item->getNumCircuiti() * $price->findByCode('15.6.52.1'));

        /** Differenziale Puro */
        /*if($itemsAdvArray[25] > 0) {
            array_push($prices, 1 * $price->findByCode('15.6.10.8'));
        }*/


        /** Dorsali */
        array_push($prices, $item->getPianiCasa() * $price->findByCode('15.4.110.12') * 15 * 3);

        /** Corrugati */
        array_push($prices, $item->getPianiCasa() * $price->findByCode('15.5.10.3') * 15 * 2);
        array_push($prices, $item->getPianiCasa() * $price->findByCode('15.5.10.4') * 15 * 2);
        array_push($prices,$item->getPianiCasa() * $price->findByCode('15.5.180.1') * 4);
        array_push($prices,$item->getPianiCasa() * $price->findByCode('15.5.180.2') * 2 * 3);

        /** Scatole */
        array_push($prices,$item->getPianiCasa() * $price->findByCode('15.5.80.8'));

        /** Ingresso fornitura */
        array_push($prices,20 * $price->findByCode('15.4.21.40'));

        /** Puntale a croce */
        array_push($prices, $price->findByCode('15.7.60.1'));

        /** Relè e alimentatori */
        /*if($item->getLevel() == 3) {
            array_push($prices, $price->findByCode('15.6.170.31') * 1 );
            array_push($prices, $price->findByCode('15.6.170.44') * 1);
        }*/

        /** Nodo Equipotenziale */
        array_push($prices, $price->findByCode('15.2.160.2'));

        /** Scaricatore */
        if ($item->getTrifase() == 0) {
            array_push($prices, $price->findByCode('15.7.201'));
            array_push($prices, $price->findByCode('15.7.202'));
        } else {
            array_push($prices, $price->findByCode('15.7.201'));
            array_push($prices, 3 * $price->findByCode('15.7.202'));
        }
        array_push($prices, $price->findByCode('15.7.202'));
        if ($item->getLevel() == 3) {
            if ($item->getTrifase() == 0) {
                array_push($prices, $price->findByCode('15.7.204.4'));
            } else {
                array_push($prices, $price->findByCode('15.7.204.2'));
            }
        }

        /** Pozzetto */
        array_push($prices, $price->findByCode('15.5.260.1'));

        /** Linea Elettrica */
        array_push($prices, 20 * $price->findByCode('15.4.110.10'));

        /** Segnalatore Acustico */
        if ($item->getCampanello() != 0) {
            array_push($prices, (1 * $price->findByCode('15.3.80.4')));
            array_push($prices, (1 * $price->findByCode('15.3.90')));
        }

        $total = (array_sum($prices));
        $sconto = $total * $item->getSconto() / 100;

        //$vat = ($total - $sconto) * 22 / 100;

        $item->setPrice($total);
        $this->getDoctrine()->getManager()->persist($item);
        $this->getDoctrine()->getManager()->flush();

        return $this->render('expertations/details.advanced.html.twig',[
            'item' => $item,
            'itemAdv' => $itemAdv,
            'qtyPL' => $qtyPL,
            'qtyPC' => $qtyPC,
            'qtyPP' => $qtyPP,
            'qtyPT' => $qtyPT,
            'qtyTP' => $qtyTP,
            'qtyTR' => $qtyTR,
            'qtyPS' => $qtyPS,
            'qtyPD' => $qtyPD,
            'qtyPST' => $qtyPST,
            'total' => $total,
            'itemsArray' => $itemsAdvArray,
            'calcTPCable' => $calcTPCable,
            'calcTVCable' => $calcTVCable,
            'vat' => $vat = 0,
            'sconto' => $sconto,
            'fun' => $this
        ]);
    }

    /**
     * @Route("preventivi/modifica/avanzato/preventivo-{pid}", name="preventivi_modifica_avanzato")
     */
    public function editExpertationAdvancedAction(Request $request, $pid, $floor=0) {
        $item = $this->getDoctrine()->getRepository(Expertations::class)->findOneBy(['pid' => $pid]);
        $expertationsAdvanced = $this->getDoctrine()->getRepository(ExpertationsAdvanced::class)->findOneBy(['father' => $item->getId()]);

        $form = $this->createForm(ExpertationsAdvancedType::class, $expertationsAdvanced)
            ->add('submit', SubmitType::class, [
                'label' => 'Modifica',
                'attr' => [
                    'class' => 'btn btn-success btn-block btn-sm mt-3   ',
                ]
            ]);
        $id = $pid;
        $pid = $this->convertPID($id);

        $ambientsCount = $this->getDoctrine()->getRepository(Expertations::class)->find($pid)->getAmbient();

        $titles = $this->getDoctrine()->getRepository(ExpertationsAdvancedLines::class)->findAll();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $expAdv = $form->getData();

            $expAdv->setFather($item->getId());
            $expAdv->setFatherFloor(0);
            $expAdv->setVal1(explode(',', $form->getData()->getVal1()));
            $expAdv->setVal2(explode(',', $form->getData()->getVal2()));
            $expAdv->setVal3(explode(',', $form->getData()->getVal3()));
            $expAdv->setVal4(explode(',', $form->getData()->getVal4()));
            $expAdv->setVal5(explode(',', $form->getData()->getVal5()));
            $expAdv->setVal6(explode(',', $form->getData()->getVal6()));
            $expAdv->setVal7(explode(',', $form->getData()->getVal7()));
            $expAdv->setVal8(explode(',', $form->getData()->getVal8()));
            $expAdv->setVal9(explode(',', $form->getData()->getVal9()));
            $expAdv->setVal10(explode(',', $form->getData()->getVal10()));
            $expAdv->setVal11(explode(',', $form->getData()->getVal11()));
            $expAdv->setVal12(explode(',', $form->getData()->getVal12()));
            $expAdv->setVal13(explode(',', $form->getData()->getVal13()));
            $expAdv->setVal14(explode(',', $form->getData()->getVal14()));
            $expAdv->setVal15(explode(',', $form->getData()->getVal15()));
            $expAdv->setVal16(explode(',', $form->getData()->getVal16()));
            $expAdv->setVal17(explode(',', $form->getData()->getVal17()));
            $expAdv->setVal18(explode(',', $form->getData()->getVal18()));
            $expAdv->setVal19(explode(',', $form->getData()->getVal19()));
            $expAdv->setVal20(explode(',', $form->getData()->getVal20()));
            $expAdv->setVal21(explode(',', $form->getData()->getVal21()));
            $expAdv->setVal22(explode(',', $form->getData()->getVal22()));
            $expAdv->setVal23(explode(',', $form->getData()->getVal23()));
            $expAdv->setVal24(explode(',', $form->getData()->getVal24()));
            $expAdv->setVal25(explode(',', $form->getData()->getVal25()));
            $expAdv->setVal26(explode(',', $form->getData()->getVal26()));
            $expAdv->setVal27(explode(',', $form->getData()->getVal27()));
            $expAdv->setVal28(explode(',', $form->getData()->getVal28()));
            $expAdv->setVal29(explode(',', $form->getData()->getVal29()));
            $expAdv->setVal30(explode(',', $form->getData()->getVal30()));
            $expAdv->setVal31(explode(',', $form->getData()->getVal31()));
            $expAdv->setVal32(explode(',', $form->getData()->getVal32()));
            $expAdv->setVal33(explode(',', $form->getData()->getVal33()));
            $expAdv->setVal34(explode(',', $form->getData()->getVal34()));
            $expAdv->setVal35(explode(',', $form->getData()->getVal35()));
            $expAdv->setVal36(explode(',', $form->getData()->getVal36()));
            $expAdv->setVal37(explode(',', $form->getData()->getVal37()));
            $expAdv->setVal38(explode(',', $form->getData()->getVal38()));
            $expAdv->setVal39(explode(',', $form->getData()->getVal39()));
            $expAdv->setVal40(explode(',', $form->getData()->getVal40()));
            $expAdv->setVal41(explode(',', $form->getData()->getVal41()));
            $expAdv->setVal42(explode(',', $form->getData()->getVal42()));
            $expAdv->setVal43(explode(',', $form->getData()->getVal43()));
            $expAdv->setVal44(explode(',', $form->getData()->getVal44()));
            $expAdv->setVal45(explode(',', $form->getData()->getVal45()));
            $expAdv->setVal46(explode(',', $form->getData()->getVal46()));
            $expAdv->setVal47(explode(',', $form->getData()->getVal47()));
            $expAdv->setVal48(explode(',', $form->getData()->getVal48()));
            $expAdv->setVal49(explode(',', $form->getData()->getVal49()));
            $expAdv->setVal50(explode(',', $form->getData()->getVal50()));
            $expAdv->setVal51(explode(',', $form->getData()->getVal51()));
            $expAdv->setVal52(explode(',', $form->getData()->getVal52()));
            $expAdv->setVal53(explode(',', $form->getData()->getVal53()));
            $expAdv->setVal54(explode(',', $form->getData()->getVal54()));
            $expAdv->setVal55(explode(',', $form->getData()->getVal55()));
            $expAdv->setVal56(explode(',', $form->getData()->getVal56()));
            $expAdv->setVal57(explode(',', $form->getData()->getVal57()));
            $expAdv->setVal58(explode(',', $form->getData()->getVal58()));
            $expAdv->setVal59(explode(',', $form->getData()->getVal59()));
            $expAdv->setVal60(explode(',', $form->getData()->getVal60()));
            $expAdv->setVal61(explode(',', $form->getData()->getVal61()));
            $expAdv->setVal62(explode(',', $form->getData()->getVal62()));
            $expAdv->setVal63(explode(',', $form->getData()->getVal63()));
            $expAdv->setVal64(explode(',', $form->getData()->getVal64()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($expAdv);
            $em->flush();

            return $this->redirectToRoute('mostra_preventivo_avanzato', [
                'pid' => $id
            ]);

        }



        return $this->render('expertations/edit.advanced.html.twig', [
            'form' => $form->createView(),
            'item' => $item,
            'titles' => $titles,
            'func' => $this,
            'count' => $ambientsCount,
            //'url' => $_SERVER['REQUEST_URI'],
            //'floor' => $floor
        ]);
    }

    /**
     * @Route("preventivi/elimina/{id}/{confirm}", name="preventivi_elimina", defaults={"confirm" = false})
     */
    public function deleteExpertatationAction($id, $confirm = false) {

        $expertation = $this->getDoctrine()->getRepository(Expertations::class)->find($id);

        if($confirm == false) {

            $client = $this->getDoctrine()->getRepository(Clients::class)->find($expertation->getClient());

            return $this->render('expertations/delete.html.twig', [
                'item' => $expertation,
                'client' => $client,
                'functions' => $this
            ]);
        } else {
            $this->addFlash('success', 'Preventivo eliminato!');

            $expertation = $this->getDoctrine()->getRepository(Expertations::class)->find($id);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($expertation);
            $entityManager->flush();

            return $this->redirectToRoute('lista_preventivi');
        }
    }

    /**
     * @Route("preventivi/imposta/accettato/{id}", name="preventivi_imposta_accettato")
     */
    public function expertationSetAcceptedAction($id) {
        $repo = $this->getDoctrine()->getManager();
        $exp = $repo->getRepository(Expertations::class)->find($id);

        $exp->setStatus(1);
        $repo->persist($exp);
        $repo->flush();

        return $this->redirectToRoute('lista_preventivi');
    }

    /**
     * @Route("preventivi/imposta/non-accettato/{id}", name="preventivi_imposta_non_accettato")
     */
    public function expertationSetNotAcceptedAction($id) {
        $repo = $this->getDoctrine()->getManager();
        $exp = $repo->getRepository(Expertations::class)->find($id);

        $exp->setStatus(0);
        $repo->persist($exp);
        $repo->flush();

        return $this->redirectToRoute('lista_preventivi');
    }


    /**
     * @param $uid
     * @return mixed
     */
    public function uidToName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getName();
    }

    public function uidToSurName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getSurname();
    }

    public function uidToGenre($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getGenre();
    }

    public function uidToRagSoc($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getRagioneSociale();
    }

    public function uidToType($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getType();
    }

    public function userToName($user) {
        return $this->getDoctrine()->getRepository(Users::class)->find($user)->getUsername();
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
        return (string) $this->getDoctrine()->getRepository(Heatings::class)->find($int)->getName();

    }

    public function unserializeThis($data,Serializer $serializer) {
        $serializer->deserialize($data, Expertations::class, 'json');
    }

    public function countArrayElements($item) {
        return count($item);
    }

    public function convertAIDtoName($aid) {
        return (string) $this->getDoctrine()->getRepository('AppBundle:Rooms')->find($aid)->getName();
    }

    public function stringToInt($string) {
        return (integer) $string;
    }

    public function explodeToArray($string) {
        return explode(',',$string);
    }

    function getPrice($item) {
        $thing = $prices = $this->getDoctrine()->getRepository('AppBundle:Prices')->find($item);
        return $thing->getPrice();
    }

    function convertOMtoName($om) {
        switch ($om) {
            case '0':
                return 'Nessuna';
                break;
            case '1':
                return 'Intonaco';
                break;
            case '2':
                return 'Mattone';
                break;
        }
    }

    function getLevel($role) {
        switch ($role) {
            case 'ROLE_SUPER_ADMIN':
                return 1;
                break;
            case 'ROLE_ADMIN':
                return 2;
                break;
            case 'ROLE_AGENT':
                return 3;
                break;
            case 'ROLE_':
                return 4;
                break;
        }
    }

    function getRoom($id) {
        return $this->getDoctrine()->getRepository(Rooms::class)->find($id)->getName();
    }

    function getFloor($id) {
        return $this->getDoctrine()->getRepository(ExpertationsAdvanced::class)->find($id)->getFloor();
    }

    /** AJAX FUNCTIONS */

    /**
     * @Route("ajax/get/expData/{exp}/{field}", name="ajax_get_expdata_field")
     */
    public function AjaxGetExpDataFiledAction($exp,$field) {

        switch ($field) {
            case 'pp':
                $return =  $this->getDoctrine()->getRepository(Expertations::class)->find($exp)->getPp();
                $result = implode(',',$return);
                return new Response($result);
                break;
            case 'pl':
                $return =  $this->getDoctrine()->getRepository(Expertations::class)->find($exp)->getPl();
                $result = implode(',',$return);
                return new Response($result);
                break;
            case 'pt':
                $return =  $this->getDoctrine()->getRepository(Expertations::class)->find($exp)->getPt();
                $result = implode(',',$return);
                return new Response($result);
                break;
            case 'c1v':
                $return =  $this->getDoctrine()->getRepository(Expertations::class)->find($exp)->getC1v();
                $result = implode(',',$return);
                return new Response($result);
                break;
            case 'c2v':
                $return =  $this->getDoctrine()->getRepository(Expertations::class)->find($exp)->getC2v();
                $result = implode(',',$return);
                return new Response($result);
                break;
        }

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
     * @Route("ajax/expertations/get/quadri/{tipo}/{level}/{meters}", name="ajax_get_expertations_quadri")
     */
    public function AjaxEGQ($tipo, $level, $meters) {

        $quadri = $this->getDoctrine()->getManager()->getRepository('AppBundle:Quadri_Elettrici')
            ->createQueryBuilder('r')
            ->select('r.numero')
            ->where('r.livello = :livello')
            ->andWhere('r.tipo = :tipo')
            ->andWhere('r.areaDa < :meters')
            ->andWhere('r.areaA > :meters')
            ->setParameter('livello', $level)
            ->setParameter('tipo', $tipo)
            ->setParameter('meters', $meters)
            ->getQuery()
            ->getScalarResult();

        return new Response($quadri[0]['numero']);
    }

    /**
     * @Route("ajax/expertation/get/tiranti/{room}", name="ajax_get_tiranti")
     */
    public function AjaxEGT($room) {
        if ($room == 12 ) {
            return new Response(1);
        } elseif ($room == 8 ) {
            return new Response(1);
        } else {
            return new Response(0);
        }
    }

    /**
     * @Route("ajax/search/expertations/{type}/{terms}", name="ajax_search_expertation")
     */
    public function AjaxSEXP($type,$terms)
    {
        switch ($type) {
            case 1:
                $item = $this->getDoctrine()->getRepository('AppBundle:Expertations')->findBy(['id' => $terms]);
                return $this->render('expertations/ajax/list.html.twig', ['expertations' => $item, 'functions' => $this]);
            case 2:
                $client = $this->getDoctrine()->getRepository(Clients::class)->createQueryBuilder('a')->where('a.name LIKE :name')->setParameter('name', '%'.$terms.'%')->getQuery()->getResult();
                $item = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['client' => $client[0]->getId()]);
                return $this->render('expertations/ajax/list.html.twig', ['expertations' => $item, 'functions' => $this]);
            case 3:
                return $this->addFlash('info','Not yet implemented');
        }
    }

    public function convertToBool($int) {
        if ($int = 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function hasExpAdv($id) {
        if ($this->getDoctrine()->getRepository(ExpertationsAdvanced::class)->find($id)) {
            return true;
        } else {
            return false;
        }
    }

    public function convertPID($id) {
        return $this->getDoctrine()->getRepository(Expertations::class)->findOneBy(['pid' => $id])->getId();
    }

    public function getPriceByCode($code) {
        return $this->getDoctrine()->getRepository(PricesAdvanced::class)->findOneBy(['code' => $code])->getPrice();
    }

}
