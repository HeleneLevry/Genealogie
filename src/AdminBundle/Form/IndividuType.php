<?php

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
                array('required' => false)
            )
            ->add(
                'prenom', 
                'text'
            )
            ->add(
                'genre', 
                ChoiceType::class, 
                array(
                    'choices'  => array(
                        null => '...',
                        'Masculin' => 'Masculin',
                        'Feminin' => 'Féminin',
                        'Autre' => 'Autre'),
                    'required' => false)
            )
            ->add(
                'dateNaissance',
                BirthdayType::class,
                array(
                    'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
                    'format' => 'ddMMyyyy',
                    'required' => false)
            )
            ->add(
                'dateDeces',
                BirthdayType::class,
                array(
                    'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
                    'format' => 'ddMMyyyy',
                    'required' => false)
            )
            ->add(
                'commentaire', 
                'textarea', 
                array('required' => false)
            )
            ->add(
                'Enregistrer',
                'submit'
            )

            // ->add(
            //     'compte'
            // )
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Individu'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_individu';
    }


}
