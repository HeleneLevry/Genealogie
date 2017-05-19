<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PathologieAjoutType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add( // Uniquement les bons individus ...
				'individu',
				EntityType::class,
				array(
					'class' => 'AdminBundle:Individu',
					'choice_label' => 'getNomComplet', 
					'placeholder' => 'Individu',
					'multiple' => false,
					'expanded' => false
				)
			)
			->add(
				'banque_patho',
				new Banque_PathoListType
			)
			->add(
				'dateDebut',
				BirthdayType::class,
				array(
					'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
					'format' => 'ddMMyyyy',
					'required' => false)
			)
			->add(
				'dateFin',
				BirthdayType::class,
				array(
					'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
					'format' => 'ddMMyyyy',
					'required' => false)
			)
			->add(
				'causeDeces',
				ChoiceType::class, 
				array(
					'choices'  => array(
						null => '...',
						true => 'Oui',
						false => 'Non',
					),
					'required' => false)
			)
			->add(
				'commentairePatho',
				'textarea', 
				array('required' => false)
				)
			->add(
				'gravite',
				new GraviteListType,
				array('required' => false)
			)
			//->add('individu')
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
            'data_class' => 'AdminBundle\Entity\Pathologie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_pathologie';
    }


}
