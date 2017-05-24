<?php
// src/AdminBundle/Form/PathologieType.php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PathologieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'banque_patho',
                EntityType::class,
                array(
                    'class' => 'AdminBundle:Banque_Patho',
                    'choice_label' => 'nomPathologie', 
                    'placeholder' => 'nom de la pathologie',
                    'multiple' => false,
                    'expanded' => false
                )
            )
            ->add(
                'dateDebut',
                BirthdayType::class,
                array(
                    'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
                    'format' => 'ddMMyyyy',
                    'required' => false
                )
            )
            ->add(
                'dateFin',
                BirthdayType::class,
                array(
                    'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
                    'format' => 'ddMMyyyy',
                    'required' => false
                )
            )
            ->add(
                'gravite',
                EntityType::class,
                array(
                    'class' => 'AdminBundle:Gravite',
                    'choice_label' => 'gravite_patho', 
                    'placeholder' => 'gravité de la pathologie',
                    'multiple' => false,
                    'expanded' => false,
                    'required' => false
                )
            )
            ->add(
                'causeDeces'
            )
            ->add(
                'commentairePatho', 
                'textarea', 
                array('required' => false)
            )
            ->add(
                'Enregistrer',
                'submit'
            )
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array('data_class' => 'AdminBundle\Entity\Pathologie')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_pathologie';
    }

}
