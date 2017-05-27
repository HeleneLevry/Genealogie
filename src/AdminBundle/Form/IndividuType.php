<?php
// src/AdminBundle/Form/IndividuType.php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class IndividuType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom', 
                'text', 
                array(
                    'label' => 'Nom : ',
                    'required' => false
                )
            )
            ->add(
                'prenom', 
                'text',
                array(
                    'label' => 'Prénom : '
                )
            )
            ->add(
                'genre', 
                ChoiceType::class, 
                array(
                    'label' => 'Genre : ',
                    'placeholder' => '...',
                    'choices'  => array(
                        'Masculin' => 'Masculin',
                        'Feminin' => 'Féminin',
                        'Autre' => 'Autre'),
                    'required' => false)
            )
            ->add(
                'relationType', 
                ChoiceType::class, 
                array(
                    'label' => 'Relation : ',
                    'placeholder' => '...',
                    'choices'  => array(
                        '.' => 'Moi-même',
                        '1' => 'Petit-fils',
                        '2' => 'Petite-fille',
                        '3' => 'Fils',
                        '4' => 'Fille',
                        '5' => 'Frère',
                        '6' => 'Soeur',
                        '7' => 'Père',
                        '8' => 'Mère',
                        '9' => 'Grand-père',
                        '10' => 'Grand-mère',
                        '11' => 'Arrière-grand-père',
                        '12' => 'Arrière-grand-mère',
                        '13' => 'Oncle',
                        '14' => 'Tante',
                        '15' => 'Beau-frère',
                        '16' => 'Belle-soeur',
                        '17' => 'Cousin',
                        '18' => 'Cousine',
                        '19' => 'Autre'),
                    'required' => false)
            )
            ->add(
                'dateNaissance',
                BirthdayType::class,
                array(
                    'label' => 'Date de naissance : ',
                    'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
                    'format' => 'ddMMyyyy',
                    'required' => false)
            )
            ->add(
                'dateDeces',
                BirthdayType::class,
                array(
                    'label' => 'Date de décès : ',
                    'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
                    'format' => 'ddMMyyyy',
                    'required' => false)
            )
            ->add(
                'commentaire', 
                'textarea', 
                array(
                    'label' => 'Commentaire : ',
                    'required' => false
                )
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
           array('data_class' => 'AdminBundle\Entity\Individu')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_individu';
    }

}