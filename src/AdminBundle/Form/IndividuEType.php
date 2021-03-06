<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use AdminBundle\Entity\Individu;


class IndividuEType extends AbstractType
{
	

	
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$idcompte=$options['compte'];
		//var_dump($idcompte);
		//settype($_SESSION['iduser'], "integer");
		//$id_compte = settype($_SESSION['iduser'], "string");
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
			// ->add(
			//  	'compte',
			//  	'textarea',
			//  	'hidden',
			//  	array('data' => $this->get('security.context')->getToken()->getUser())
			//  	array('data' => $idcompte)
			//  	array('data' => $options['compte'])
			// )
			//->add(
				//'compte', 
				//new CompteIdType()
			//)
			->add(
				'commentaire', 
				'textarea', 
				array('required' => false)
			)
			->add(
				'commentaire_num_compte', 
				TextType::class,
				array('data' => $options['compte'], 'mapped' => false)
			)
			;
			//$individu = new Individu();
			//$individu->setCompte($options['compte']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Individu',
            'compte' => null
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
