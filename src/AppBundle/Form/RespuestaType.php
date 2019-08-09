<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RespuestaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder//->add('respuesta', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
//                'label'=>'Respuesta',
//                'choices'=>array(
//                    'Si' => true,
//                    'No' => false,
//                ),
//                'expanded'=>true,
//                'required'=>true,
//                'choices_as_values' => true,
//            ))
//            ->add('respuesta', 'Symfony\Component\Form\Extension\Core\Type\CollectionType',
//                array (
//                    // ...
//                    'allow_add' => true,
//                    'prototype' => true,
//                    'attr' => array(
//                        'class' => 'my-selector',
//                    )))
            ->add('comentarios');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Respuesta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'RespuestaType';
    }


}
