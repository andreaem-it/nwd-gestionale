<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpertationsAdvancedType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('father', HiddenType::class)
                ->add('val1', HiddenType::class)
                ->add('val2', HiddenType::class)
                ->add('val3', HiddenType::class)
                ->add('val4', HiddenType::class)
                ->add('val5', HiddenType::class)
                ->add('val6', HiddenType::class)
                ->add('val7', HiddenType::class)
                ->add('val8', HiddenType::class)
                ->add('val9', HiddenType::class)
                ->add('val10', HiddenType::class)
                ->add('val11', HiddenType::class)
                ->add('val12', HiddenType::class)
                ->add('val13', HiddenType::class)
                ->add('val14', HiddenType::class)
                ->add('val15', HiddenType::class)
                ->add('val16', HiddenType::class)
                ->add('val17', HiddenType::class)
                ->add('val18', HiddenType::class)
                ->add('val19', HiddenType::class)
                ->add('val20', HiddenType::class)
                ->add('val21', HiddenType::class)
                ->add('val22', HiddenType::class)
                ->add('val23', HiddenType::class)
                ->add('val24', HiddenType::class)
                ->add('val25', HiddenType::class)
                ->add('val26', HiddenType::class)
                ->add('val27', HiddenType::class)
                ->add('val28', HiddenType::class)
                ->add('val29', HiddenType::class)
                ->add('val30', HiddenType::class)
                ->add('val31', HiddenType::class)
                ->add('val32', HiddenType::class)
                ->add('val33', HiddenType::class)
                ->add('val34', HiddenType::class)
                ->add('val35', HiddenType::class)
                ->add('val36', HiddenType::class)
                ->add('val37', HiddenType::class)
                ->add('val38', HiddenType::class)
                ->add('val39', HiddenType::class)
                ->add('val40', HiddenType::class)
                ->add('val41', HiddenType::class)
                ->add('val42', HiddenType::class)
                ->add('val43', HiddenType::class)
                ->add('val44', HiddenType::class)
                ->add('val45', HiddenType::class)
                ->add('val46', HiddenType::class)
                ->add('val47', HiddenType::class)
                ->add('val48', HiddenType::class)
                ->add('val49', HiddenType::class)
                ->add('val50', HiddenType::class)
                ->add('val51', HiddenType::class)
                ->add('val52', HiddenType::class)
                ->add('val53', HiddenType::class)
                ->add('val54', HiddenType::class)
                ->add('val55', HiddenType::class)
                ->add('val56', HiddenType::class)
                ->add('val57', HiddenType::class)
                ->add('val58', HiddenType::class)
                ->add('val59', HiddenType::class)
                ->add('val60', HiddenType::class)
                ->add('val61', HiddenType::class)
                ->add('val62', HiddenType::class)
                ->add('val63', HiddenType::class)
                ->add('val64', HiddenType::class)
                ->add('val65', HiddenType::class)
                ->add('fatherFloor', HiddenType::class)
                ->add('opt1Enabled', CheckBoxType::class, [ 'label' => 'PRIMA AGGIUNTA POSSIBILE: predisposizione per ingresso linee ENEL e TELECOM' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt1_1Value', IntegerType::class, [ 'label' => 'Tubazione flessibile in polietilene a doppia parete. Diametro esterno 50 mm' , 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt1_2Value', IntegerType::class, [ 'label' => 'Pozzetto in resina completo di coperchio carrabile 300 x 300 mm.' , 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt1_3Value', IntegerType::class, [ 'label' => 'Tubazione flessibile in polietilene a doppia parete. Diametro esterno 63mm', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt1_4Value', IntegerType::class, [ 'label' => 'Pozzetto in cemento completo di coperchio carrabile 300 x 300 mm.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt2Enabled', CheckBoxType::class, [ 'label' => 'SECONDA AGGIUNTA POSSIBILE: completamento predisposizione per domotica con Relè passo passo.' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt2_1Value', IntegerType::class, [ 'label' => 'Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera. Sono compresi: il cablaggio, gli accessori, il montaggio, E’ compreso quanto altro occorre per dare il lavoro finito. E’ esclusa la quota di carpenteria. Relè passo-passo 1 contatto 16A', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt2_2Value', IntegerType::class, [ 'label' => 'Apparecchi modulari da inserire su quadro elettrico con attacco DIN, forniti e posti in opera. Sono compresi: il cablaggio, gli accessori, il montaggio, E’ compreso quanto altro occorre per dare il lavoro finito. E’ esclusa la quota di carpenteria. Trasformatore BTS secondario 24V 40VA', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3Enabled', CheckBoxType::class, [ 'label' => 'TERZA AGGIUNTA POSSIBILE: impianto di antenna satellitare, completo di antenna ed accessori' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt3_1Value', IntegerType::class, [ 'label' => 'Impianto di ricezione di segnale TV satellitare costituito da antenna parabolica in alluminio, idonea alla ricezione di segnale TV satellitare, completa di palo e di sistemi di fissaggio su tetto, su parete o su copertura piana di qualsiasi natura, di cavi di collegamento fino all\'impianto di amplificazione. Il tutto posto in opera con tutto quanto occorre per dare il lavoro finito, in copertura a qualsiasi altezza, incluse le eventuali opere murarie per il fissaggio ed il ripristino di eventuali parti  di copertura interessate. Per antenna parabolica di diametro pari a 80 cm', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_2Value', IntegerType::class, [ 'label' => 'Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto, inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l\'opera finita e funzionante. Convertitore ad un’uscita', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_3Value', IntegerType::class, [ 'label' => 'Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto, inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l\'opera finita e funzionante. Convertitore a due uscite', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_4Value', IntegerType::class, [ 'label' => 'Sistema di decodificazione di segnale TV SAT, per impianto singolo, costituito da convertitore ad una o più uscite, da posizionare su alloggiamento predisposto, inclusi i cavi di collegamento delle colonne montanti, e degli accessori necessari per dare l\'opera finita e funzionante. Convertitore a quattro uscite', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_5Value', IntegerType::class, [ 'label' => 'Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese, completo di convertitore, alimentatore, con ingressi derivati dall\'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e degli accessori necessari per dare l\'opera finita e funzionante. Sistema base con multiswitch radiale a 4 uscite', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_6Value', IntegerType::class, [ 'label' => 'Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese, completo di convertitore, alimentatore, con ingressi derivati dall\'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e degli accessori necessari per dare l\'opera finita e funzionante. Centralina in cascata a 4 uscite', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_7Value', IntegerType::class, [ 'label' => 'Sistema di amplificazione ed equalizzazione multiswitch per la distribuzione del segnale TV SAT miscelato con segnale TV terrestre, fino a 30 prese, completo di convertitore, alimentatore, con ingressi derivati dall\'antenna parabolica, inclusi i cavi di collegamento delle colonne montanti e degli accessori necessari per dare l\'opera finita e funzionante. Amplificazione  finale per alimentazione fino a 60 prese', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_8Value', IntegerType::class, [ 'label' => 'Incremento al punto presa di servizio per presa di ricezione TV satellitare', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt3_9Value', IntegerType::class, [ 'label' => 'Cavo coassiale per impianti di antenna TV  al metro per linea dorsale', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt4Enabled', CheckBoxType::class, [ 'label' => 'QUARTA AGGIUNTA POSSIBILE: oneri di predisposizione per diffusione sonora per gli ambienti dell\'abitazione' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt4_1Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt4_2Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt4_3Value', IntegerType::class, [ 'label' => 'Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt5Enabled', CheckBoxType::class, [ 'label' => 'QUINTA AGGIUNTA POSSIBILE: oneri di predisposizione per impianto sorround soggiorno.				' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt5_1Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt5_2Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt5_3Value', IntegerType::class, [ 'label' => 'Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt6Enabled', CheckBoxType::class, [ 'label' => 'SESTA AGGIUNTA POSSIBILE: connettorizzazione dei punti di trasmissione dati predisposti e conteggiati nella proposta C. 				' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt6_1Value', IntegerType::class, [ 'label' => 'Incremento al punto presa di servizio per connettore tipo RJ45 con cavo UTP cat. 6', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt7Enabled', CheckBoxType::class, [ 'label' => 'SETTIMA AGGIUNTA POSSIBILE: oneri di predisposizione per videosorveglianza esterna.				' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt7_1Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt7_2Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt7_3Value', IntegerType::class, [ 'label' => 'Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt8Enabled', CheckBoxType::class, [ 'label' => 'OTTAVA AGGIUNTA POSSIBILE: oneri di predisposizione per sistema di rilevazione allarme.				' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt8_1Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt8_2Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiaturaMaggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt8_3Value', IntegerType::class, [ 'label' => 'Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt9Enabled', CheckBoxType::class, [ 'label' => 'NONA AGGIUNTA POSSIBILE: oneri di predisposizione per impianto di rilevazione fumi. 				' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt9_1Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt9_2Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt9_3Value', IntegerType::class, [ 'label' => 'Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10Enabled', CheckBoxType::class, [ 'label' => 'DECIMA AGGIUNTA POSSIBILE: predisposizioni per rilevatori sonde allagamento e gas.				' , 'attr' => ['class' => 'custom-control-input'] , 'label_attr' => ['class' => 'custom-control-label'] ])
                ->add('opt10_1Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_2Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_3Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_4Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_5Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_6Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_7Value', IntegerType::class, [ 'label' => 'PUNTO PRESA DI SERVIZIO in  traccia sono escluse le opere murarie', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_8Value', IntegerType::class, [ 'label' => 'Incremento alla canalizzazione per p.to presa di servizio per opere murarie su murature NON Intonacate. Sono esclusi: l’intonaco, la rasatura e la tinteggiatura', 'attr' => ['class' => 'custom-form-control'] ])
                ->add('opt10_9Value', IntegerType::class, [ 'label' => 'Maggiorazione per opere murarie su muratura in mattone pieno, calcestruzzo o pietra.', 'attr' => ['class' => 'custom-form-control'] ])
                ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ExpertationsAdvanced'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expertationsadvanced';
    }


}
