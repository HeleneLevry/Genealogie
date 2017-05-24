<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Banque_PathoSupprType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add(
				'nomPathologie',
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
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Banque_Patho'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_banque_patho';
    }


}
