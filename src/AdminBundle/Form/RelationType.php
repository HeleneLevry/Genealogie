<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add(
				'individuConnu',
				'entity',
				array(
					'class' => 'AdminBundle:Individu', 
					'property' => 'prenom', 
					'multiple' => true
				)
			)	
			->add(
				'typeRelation', 
				ChoiceType::class, 
				array('choices'  => array(
					true => 'ascendant',
					false => 'descendant'))
			)
			->add(
				'individuALier',
				'entity',
				array(
					'class' => 'AdminBundle:Individu', 
					'property' => 'prenom', 
					'multiple' => true
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
            'data_class' => 'AdminBundle\Entity\Relation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_relation';
    }


}
