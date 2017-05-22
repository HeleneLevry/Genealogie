<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;


class PathologieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                'causeDeces'
            )
            ->add(
                'commentairePatho', 
                'textarea', 
                array('required' => false)
            )
            // ->add(
            //     'individu'
            // )
            ->add(
                'gravite',
                new GraviteType()
            )
            ->add(
                'banque_patho',
                new Banque_PathoType()
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
            array(
            'data_class' => 'AdminBundle\Entity\Pathologie'
            )
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
