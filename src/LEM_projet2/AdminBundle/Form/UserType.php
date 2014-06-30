<?php

namespace LEM_projet2\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civility', 'entity', array(
                    'class' => 'AdminBundle:Civility',
                    'property' => 'name',
                    'empty_value' => 'Sélectionner'))
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            ->add('password', 'password')                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LEM_projet2\AdminBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lem_projet2_adminbundle_user';
    }
}
