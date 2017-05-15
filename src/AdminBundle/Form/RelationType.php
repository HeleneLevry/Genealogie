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
				'typeRelation', 
				ChoiceType::class, 
				array('choices'  => array(
					'Ascendant' => 'ascendant',
					'Descendant' => 'descendant'))
			)
			->add(
				'Enregistrer',
				'submit'
			)
			;
			
		 $builder->addEventListener(
			FormEvents::POST_SET_DATA, 
			function(FormEvent $event) {
				$relation = $event->getData();
				if (null === $relation) {
					return; // On sort de la fonction sans rien faire lorsque $advert vaut null
				}
				if ($relation->getTypeRelation() === 'ascendant') {
					$event->getForm()
						->add(
							'individuDescendant',
							'collection',
							array(
								'noms'	=> new IndividuType(),
								'allow_add' => true,
								'allow_delete' => true)
						)
						->add(
							'individuAscendant',
							new IndividuType()
						);
				} else {
					$event->getForm()
						->add(
							'individuDescendant',
							new IndividuType()
						);
				}
			});
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
