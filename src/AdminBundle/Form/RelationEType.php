<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RelationEType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$idcompte=$options['compte'];
		//$this->id_compte = $option['id_compte'];
        $builder
			->add(
				'individuConnu',
				EntityType::class,
				array(
					'class' => 'AdminBundle:Individu', 
					'query_builder' => function (EntityRepository $er) {
						return $er->createQueryBuilder('i')
							->where('i.compte = :idcompte')
							->orderBy('i.nom', 'ASC')
							->orderBy('i.prenom','ASC');
					},
					'choice_label' => 'getNomComplet', 
					'multiple' => false,
					'expanded' => false
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
				new IndividuEType(array('data' => $options['compte']))
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
			->add(
				'commentaire_2', 
				TextType::class,
				array('data' => $idcompte, 'mapped' => false)
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
