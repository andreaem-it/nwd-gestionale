<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
        $builder
            ->add('father')
            ->add('val1', CollectionType::class, [
                'entry_type' => IntegerType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false,
                //'value' => $item->getC1v()
            ])
            ->add('val2', IntegerType::class)
            ->add('val3', IntegerType::class)
            ->add('val4', IntegerType::class)
            ->add('val5', IntegerType::class)
            ->add('val6', IntegerType::class)
            ->add('val7', IntegerType::class)
            ->add('val8', IntegerType::class)
            ->add('val9', IntegerType::class)
            ->add('val10', IntegerType::class)
            ->add('val11', IntegerType::class)
            ->add('val12', IntegerType::class)
            ->add('val13', IntegerType::class)
            ->add('val14', IntegerType::class)
            ->add('val15', IntegerType::class)
            ->add('val16', IntegerType::class)
            ->add('val17', IntegerType::class)
            ->add('val18', IntegerType::class)
            ->add('val19', IntegerType::class)
            ->add('val20', IntegerType::class)
            ->add('val21', IntegerType::class)
            ->add('val22', IntegerType::class)
            ->add('val23', IntegerType::class)
            ->add('val24', IntegerType::class)
            ->add('val25', IntegerType::class)
            ->add('val26', IntegerType::class)
            ->add('val27', IntegerType::class)
            ->add('val28', IntegerType::class)
            ->add('val29', IntegerType::class)
            ->add('val30', IntegerType::class)
            ->add('val31', IntegerType::class)
            ->add('val32', IntegerType::class)
            ->add('val33', IntegerType::class)
            ->add('val34', IntegerType::class)
            ->add('val35', IntegerType::class)
            ->add('val36', IntegerType::class)
            ->add('val37', IntegerType::class)
            ->add('val38', IntegerType::class)
            ->add('val39', IntegerType::class)
            ->add('val40', IntegerType::class)
            ->add('val41', IntegerType::class)
            ->add('val42', IntegerType::class)
            ->add('val43', IntegerType::class)
            ->add('val44', IntegerType::class)
            ->add('val45', IntegerType::class)
            ->add('val46', IntegerType::class)
            ->add('val47', IntegerType::class)
            ->add('val48', IntegerType::class)
            ->add('val49', IntegerType::class)
            ->add('val50', IntegerType::class)
            ->add('val51', IntegerType::class)
            ->add('val52', IntegerType::class)
            ->add('val53', IntegerType::class)
            ->add('val54', IntegerType::class)
            ->add('val55', IntegerType::class)
            ->add('val56', IntegerType::class)
            ->add('val57', IntegerType::class)
            ->add('val58', IntegerType::class)
            ->add('val59', IntegerType::class)
            ->add('val60', IntegerType::class)
            ->add('val61', IntegerType::class)
            ->add('val62', IntegerType::class)
            ->add('val63', IntegerType::class)
            ->add('val64', IntegerType::class)
            ->add('val65', IntegerType::class);
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
