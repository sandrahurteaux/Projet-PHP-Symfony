<?php

namespace LEM_projet2\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address1', 'text', array('label'=>'Adresse'))
            ->add('address2', 'text', array('label'=>'Cpl. adresse','required' => false))
            ->add('postalcode','text', array('label'=>'Code postal'))
            ->add('town','text', array('label'=>'Ville'))
            ->add('billing', 'choice', array('label'=>'Choix', 'choices' => array(0 => "livraison uniquement", 1 => "facturation"),
                                                'multiple' => false,
                                                'preferred_choices' => array(1),
                                                ))
            ->add('phone1','text', array('label'=>'Tél.','required' => false))
            ->add('phone2','text', array('label'=>'Tél. (portable)','required' => false))
            ->add('comment','textarea', array('label'=>'Commentaires','required' => false))
            ->add('isactive','hidden')
            ->add('id','hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LEM_projet2\AdminBundle\Entity\Address'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lem_projet2_adminbundle_address';
    }
}
