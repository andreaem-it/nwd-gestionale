<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clients;
use AppBundle\Entity\Expertations;
use AppBundle\Entity\ExpertationsAdvanced;
use AppBundle\Entity\Heatings;
use AppBundle\Entity\Rooms;
use AppBundle\Entity\Users;
use AppBundle\Form\ExpertationsAdvancedType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @Route("/preventivi/mostra/{id}", name="mostra_preventivo")
     */
    public function expertationsShowAction($id) {

        $item = $this->getDoctrine()->getRepository('AppBundle:Expertations')->find($id);

        $client = $this->getDoctrine()->getRepository('AppBundle:Clients')->find($item->getClient());



        if($item->getPrice() == 0.0) {

            $em = $this->getDoctrine()->getManager();
            $item = $em->getRepository('AppBundle:Expertations')->find($item->getId());

            $total = (array_sum($item->getPp()) * $this->getPrice(1)) +
                     (array_sum($item->getPl()) * $this->getPrice(2)) +
                     (array_sum($item->getPt()) * $this->getPrice(3));

            dump($total);

            if($item->getOpereMurarie() == 1) {
                //TODO: Price
                $opMurPp = ($this->getPrice(4) * array_sum($item->getPp()));
            } elseif ($item->getOpereMurarie() == 2) {
                $opMurPp = ($this->getPrice(5) * array_sum($item->getPp()));
            } else {
                $opMurPp = ($this->getPrice(6) * array_sum($item->getPp())) ;
            }

            if($item->getOpereMurarie() == 1) {
                //TODO: Price
                $opMurPl = ($this->getPrice(7) * array_sum($item->getPl()));
            } elseif($item->getOpereMurarie() == 2) {
                $opMurPl = ($this->getPrice(8) * array_sum($item->getPl()));
            } else {
                $opMurPl = ($this->getPrice(9) * array_sum($item->getPl()));
            }

            if($item->getOpereMurarie() == 1) {
                //TODO: Price
                $opMurPt = ($this->getPrice(10) * array_sum($item->getPt()));
            } elseif($item->getOpereMurarie() == 2) {
                $opMurPt = ($this->getPrice(11) * array_sum($item->getPt()));
            } else {
                $opMurPt = ($this->getPrice(12) * array_sum($item->getPt()));
            }

            $circ       = ($this->getPrice(13) * $item->getNumCircuiti());
            $prTelDati  = ($this->getPrice(14)  * $item->getNumPreseTelefonoDati());
            $illmSic    = ($this->getPrice(15)  * $item->getIllumSicurezza());

            if ($item->getSpd() == 1) {
                $spd = $this->getPrice(16);
            } elseif ($item->getSpd() == 2) {
                $spd = $this->getPrice(17);
            }

            $total= $total +
                    $opMurPp +
                    $opMurPl +
                    $opMurPt +
                    $circ +
                    $prTelDati +
                    $illmSic +
                    $spd;


            $item->setPrice($total);
            $em->flush();

            $generated = true;

        } else {

            $total = $item->getPrice();

            $generated = false;

        }

        $vat = $total * 22 / 100;

        $vattotal = ($total + $vat);

        $sconto = $item->getSconto() * $vattotal / 100;

        $grandtotal = $vattotal - $sconto;

        dump($grandtotal);
        dump($total);
        dump($item);

        return $this->render('expertations/show.html.twig', [
            'functions' => $this,
            'item' => $item,
            'total' => $total,
            'vat' => $vat,
            'sconto' => $sconto,
            'grand_total' => $grandtotal,
            'generated' => $generated,
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
                        ->where('u.refereer = :uid')
                        ->setParameter('uid', $this->getUser()->getId())
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'name',
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


            ->add('num_circuiti', IntegerType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Circuiti'
            ])
            ->add('num_prese_telefono_dati', IntegerType::class, [
                'attr' => ['class' => 'form-control'] ,
                'label' => 'Prese Telefono/Dati'
            ])
            ->add('illum_sicurezza', IntegerType::class, [
                'attr' => ['class' => 'form-control'] ,
                'label' => 'Illuminazione Sicurezza'
            ])
            ->add('spd', ChoiceType::class, [
                'choices' => [
                    'SPD ad arrivo linea, Tolleranza R1' => 1,
                    'SPD ad arrivo linea, Tolleranza R1, Protezione sovratensioni' => 2
                ],
                'attr' => ['class' => 'form-control'] ,
                'label' => 'SPD'
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
                    'attr' => ['class' => 'form-control'],
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
            ->add('c1n', ChoiceType::class, [
                'placeholder' => '--Seleziona--',
                'choices' => [
                    'Punto Comando' => 'Punto Comando',
                    'Tirante' => 'Tirante',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'required' => false
                ] ,
                'label' => false
            ])
            ->add('c2n',ChoiceType::class, [
                'placeholder' => '--Seleziona--',
                'choices' => [
                    'Punto Comando' => 'Punto Comando',
                    'Tirante' => 'Tirante',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'required' => false
                ] ,
                'label' => false
            ])
            ->add('c3n',TextType::class, [
                'label' => false,
                'attr' => ['class' => 'form-control','placeholder' => 'Nuova Dotazione'],
                'required' => false
            ])
            ->add('c4n',TextType::class, [
                'label' => false,
                'attr' => ['class' => 'form-control','placeholder' => 'Nuova Dotazione'],
                'required' => false
            ])
            ->add('c5n',TextType::class, [
                'label' => false,
                'attr' => ['class' => 'form-control','placeholder' => 'Nuova Dotazione'],
                'required' => false
            ])
            ->add('c1v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control', 'min' => 0]
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
                    'attr' => ['class' => 'form-control', 'min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false
            ])
            ->add('c3v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control', 'min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false
            ])
            ->add('c4v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control', 'min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false
            ])
            ->add('c5v', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-control', 'min' => 0]
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

            $em = $this->getDoctrine()->getManager();
            $em->persist($expertation);
            $em->flush();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
            $json = $serializer->serialize($form->getData(), 'json');
            return $this->redirectToRoute('mostra_preventivo', ['id' => $form->getData()->getId()]);
        }

        return $this->render('expertations/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("preventivi/dettaglio/{id}", name="preventivi_dettaglio_id")
     */
    public function detailsAction($id) {

        $item = $this->getDoctrine()->getRepository(Expertations::class)->find($id);

        $qtyPL = array_sum($item->getPl());
        $qtyPC = array_sum($item->getC1v());
        $qtyPP = array_sum($item->getPp());

        dump($qtyPL);

        $total_1 = ($qtyPL * 22.20) + ($qtyPL * 11.80);

        if ($item->getOpereMurarie() == 0) {
            $total_2 = $qtyPL * 5.60;
        } elseif ($item->getOpereMurarie() == 1) {
            $total_2 = $qtyPL * 14.90;
        } elseif ($item->getOpereMurarie() == 2) {
            $total_2 = $qtyPL * 26.90;
        }

        $total_4 = ($qtyPC * 9.90) + ($qtyPC * 6.30);

        if ($item->getOpereMurarie() == 0) {
            $total_5 = $qtyPC * 3.10;
        } elseif ($item->getOpereMurarie() == 1) {
            $total_5 = $qtyPC * 10.60;
        } elseif ($item->getOpereMurarie() == 2) {
            $total_5 = $qtyPC * 13.40;
        }

        $total_7 = ($qtyPP * 26.20) + ($qtyPP * 13.80) + ($qtyPP * 12.60);

        if ($item->getOpereMurarie() == 0) {
            $total_8 = ($qtyPC * 5.70);
        } elseif ($item->getOpereMurarie() == 1) {
            $total_8 = ($qtyPC * 15.30);
        } elseif ($item->getOpereMurarie() == 2) {
            $total_8 = ($qtyPC * 27.30);
        }

        $total = $total_1 +
                 $total_2 +
                 $total_4 +
                 $total_5 +
                 $total_7 +
                 $total_8;

        $vat = $total * 22 / 100;

        $sconto = $total * $item->getSconto() / 100;

        dump($total_1);
        dump($total_2);
        dump($total_4);
        dump($total_5);
        dump($total_7);
        dump($total_8);


        return $this->render('expertations/details.html.twig',[
            'item' => $item,
            'qtyPL' => $qtyPL,
            'qtyPC' => $qtyPC,
            'qtyPP' => $qtyPP,
            'total' => $total,
            'vat' => $vat,
            'sconto' => $sconto
        ]);
    }

    /**
     * @Route("preventivi/avanzato/mostra/{id}", name="mostra_preventivo_avanzato")
     */
    public function showExpertationAdvancedAction($id) {

        $data = $this->getDoctrine()->getRepository(Expertations::class)->find($id);
        $item = $this->getDoctrine()->getRepository(ExpertationsAdvanced::class)->findBy(['father' => $id]);

        dump($data);
        dump($item);

        return $this->render('expertations/show.advanced.html.twig',[
            'item' => $item,
            'data' => $data,
            'func' => $this
        ]);
    }

    /**
     * @Route("preventivi/avanzato/nuovo/{id}", name="nuovo_preventivo_avanzato", defaults={"id" : "0"})
     */
    public function newExpertationAdvancedAction(Request $request,$id) {

        $item = $this->getDoctrine()->getRepository(Expertations::class)->find($id);
        //$expertationsAdvanced = $this->getDoctrine()->getRepository(ExpertationsAdvanced::class);
        $expertationsAdvanced = new ExpertationsAdvanced();
        $ambientsCount = $this->getDoctrine()->getRepository(Expertations::class)->find($id)->getAmbient();

        dump($ambientsCount);


        $form = $this->createForm(ExpertationsAdvancedType::class, $expertationsAdvanced)
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success',
                    'style' => 'display:none'
                ]
            ]);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $expAdv = $form->getData();

            dump($form->getData());

            $expAdv->setFather($item->getId());
            $expAdv->setFatherFloor("1");
            $expAdv->setVal1(explode(',',$form->getData()->getVal1()));
            $expAdv->setVal2(explode(',',$form->getData()->getVal2()));
            $expAdv->setVal3(explode(',',$form->getData()->getVal3()));
            $expAdv->setVal4(explode(',',$form->getData()->getVal4()));
            $expAdv->setVal5(explode(',',$form->getData()->getVal5()));
            $expAdv->setVal6(explode(',',$form->getData()->getVal6()));
            $expAdv->setVal7(explode(',',$form->getData()->getVal7()));
            $expAdv->setVal8(explode(',',$form->getData()->getVal8()));
            $expAdv->setVal9(explode(',',$form->getData()->getVal9()));
            $expAdv->setVal10(explode(',',$form->getData()->getVal10()));
            $expAdv->setVal11(explode(',',$form->getData()->getVal11()));
            $expAdv->setVal12(explode(',',$form->getData()->getVal12()));
            $expAdv->setVal13(explode(',',$form->getData()->getVal13()));
            $expAdv->setVal14(explode(',',$form->getData()->getVal14()));
            $expAdv->setVal15(explode(',',$form->getData()->getVal15()));
            $expAdv->setVal16(explode(',',$form->getData()->getVal16()));
            $expAdv->setVal17(explode(',',$form->getData()->getVal17()));
            $expAdv->setVal18(explode(',',$form->getData()->getVal18()));
            $expAdv->setVal19(explode(',',$form->getData()->getVal19()));
            $expAdv->setVal20(explode(',',$form->getData()->getVal20()));
            $expAdv->setVal21(explode(',',$form->getData()->getVal21()));
            $expAdv->setVal22(explode(',',$form->getData()->getVal22()));
            $expAdv->setVal23(explode(',',$form->getData()->getVal23()));
            $expAdv->setVal24(explode(',',$form->getData()->getVal24()));
            $expAdv->setVal25(explode(',',$form->getData()->getVal25()));
            $expAdv->setVal26(explode(',',$form->getData()->getVal26()));
            $expAdv->setVal27(explode(',',$form->getData()->getVal27()));
            $expAdv->setVal28(explode(',',$form->getData()->getVal28()));
            $expAdv->setVal29(explode(',',$form->getData()->getVal29()));
            $expAdv->setVal30(explode(',',$form->getData()->getVal30()));
            $expAdv->setVal31(explode(',',$form->getData()->getVal31()));
            $expAdv->setVal32(explode(',',$form->getData()->getVal32()));
            $expAdv->setVal33(explode(',',$form->getData()->getVal33()));
            $expAdv->setVal34(explode(',',$form->getData()->getVal34()));
            $expAdv->setVal35(explode(',',$form->getData()->getVal35()));
            $expAdv->setVal36(explode(',',$form->getData()->getVal36()));
            $expAdv->setVal37(explode(',',$form->getData()->getVal37()));
            $expAdv->setVal38(explode(',',$form->getData()->getVal38()));
            $expAdv->setVal39(explode(',',$form->getData()->getVal39()));
            $expAdv->setVal40(explode(',',$form->getData()->getVal40()));
            $expAdv->setVal41(explode(',',$form->getData()->getVal41()));
            $expAdv->setVal42(explode(',',$form->getData()->getVal42()));
            $expAdv->setVal43(explode(',',$form->getData()->getVal43()));
            $expAdv->setVal44(explode(',',$form->getData()->getVal44()));
            $expAdv->setVal45(explode(',',$form->getData()->getVal45()));
            $expAdv->setVal46(explode(',',$form->getData()->getVal46()));
            $expAdv->setVal47(explode(',',$form->getData()->getVal47()));
            $expAdv->setVal48(explode(',',$form->getData()->getVal48()));
            $expAdv->setVal49(explode(',',$form->getData()->getVal49()));
            $expAdv->setVal50(explode(',',$form->getData()->getVal50()));
            $expAdv->setVal51(explode(',',$form->getData()->getVal51()));
            $expAdv->setVal52(explode(',',$form->getData()->getVal52()));
            $expAdv->setVal53(explode(',',$form->getData()->getVal53()));
            $expAdv->setVal54(explode(',',$form->getData()->getVal54()));
            $expAdv->setVal55(explode(',',$form->getData()->getVal55()));
            $expAdv->setVal56(explode(',',$form->getData()->getVal56()));
            $expAdv->setVal57(explode(',',$form->getData()->getVal57()));
            $expAdv->setVal58(explode(',',$form->getData()->getVal58()));
            $expAdv->setVal59(explode(',',$form->getData()->getVal59()));
            $expAdv->setVal60(explode(',',$form->getData()->getVal60()));
            $expAdv->setVal61(explode(',',$form->getData()->getVal61()));
            $expAdv->setVal62(explode(',',$form->getData()->getVal62()));
            $expAdv->setVal63(explode(',',$form->getData()->getVal63()));
            $expAdv->setVal64(explode(',',$form->getData()->getVal64()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($expAdv);
            $em->flush();

            $this->redirectToRoute('mostra_preventivo_avanzato', [
                'id' => $expAdv->getId()
            ]);

        }

        return $this->render('expertations/new.advanced.html.twig',[
                'form' => $form->createView(),
                'item' => $item,
                'func' => $this,
                'count' => $ambientsCount

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
     * @param $uid
     * @return mixed
     */
    public function uidToName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getName();
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
}
