// src/AdminBundle/Form/GraviteType.php

<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EntityType;

class GraviteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'gravitePatho', 
                EntityType::class,
                array(
                    'class' => 'AdminBundle:Gravite',
                    'choice_label' => 'gravite_patho', 
                    'placeholder' => 'gravite de la pathologie',
                    'multiple' => false,
                    'expanded' => false
                )
            )
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array('data_class' => 'AdminBundle\Entity\Gravite')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_gravite';
    }

}