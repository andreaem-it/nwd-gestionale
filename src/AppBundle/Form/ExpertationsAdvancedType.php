<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
            ->add('father', HiddenType::class)
            ->add('fatherFloor',HiddenType::class)
            /*->add('val1', CollectionType::class, [
                'entry_type' => HiddenType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['min' => 0]
                ],
                'label' => false,
                'allow_add' => 'true',
                'allow_delete' => 'true',
                'required' => false,
                //'value' => $item->getC1v()
            ])*/
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
            ->add('val64', HiddenType::class);
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
