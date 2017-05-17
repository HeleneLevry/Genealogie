<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelationEType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		//$this->id_compte = $option['id_compte'];
        $builder
			//->add(
				//'individuConnu',
				//'entity',
				//array(
					//'class' => 'AdminBundle:Individu', 
					//'property' => 'prenom', 
					//'multiple' => true
				//)
			//)	
			->add(
				'typeRelation', 
				ChoiceType::class, 
				array('choices'  => array(
					true => 'ascendant',
					false => 'descendant'))
			)
			->add(
				'individuALier',
				new IndividuEType(array($options['compte']))
			)
			->add(
				'Enregistrer',
				'submit'
			)
			->add(
				'commentaire', 
				TextType::class,
				array('data' => $options['compte'], 'mapped' => false)
			)
			;
	}
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Relation',
            'compte' => null
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
