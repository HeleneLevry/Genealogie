<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class IndividuEType extends AbstractType
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
				array('choices'  => array(
					'Masculin' => 'Masculin',
					'Feminin' => 'Féminin',
					'Autre' => 'Autre'))
			)
			->add('dateNaissance')
			->add('dateDeces')
			//->add(
				//'dateNaissance',
				//BirthdayType::class,
				//array(
					//'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
					//'format' => 'ddMMyyyy'
				//),
				//array('required' => false)
			//)
			//->add(
				//'dateDeces', 
				//BirthdayType::class, 
				//array(
					//'placeholder' => array('day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'),
					//'format' => 'ddMMyyyy'
				//),
				//array('required' => false)
			//)
			->add(
				'commentaire', 
				'textarea', 
				array('required' => false)
			)
			//->add(
				//'your_embedded_field', 
				//CollectionType::class, 
				//array(
					//'entry_type' => IndividuType::class,
					//'entry_options' => array('compte' => $this->compte)
				//)
			//)
			//->add('compte')
			//->getCompte() app.user.username
			//->add('Enregistrer', 'submit')
			->add(
				'commentaire_indiv', 
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
