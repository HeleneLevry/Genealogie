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
		//$this->id_compte = $option['id_compte'];
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
					'Ascendant' => 'ascendant',
					'Descendant' => 'descendant'))
			)
			->add(
				'individuALier',
				new IndividuType()
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
            'data_class' => 'AdminBundle\Entity\Relation',
            //'compte'=>null
			//'id_compte' => $this->getUser()
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
