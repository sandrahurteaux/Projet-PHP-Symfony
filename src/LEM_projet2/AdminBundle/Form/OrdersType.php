<?php

namespace LEM_projet2\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrdersType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('date')
            ->add('sum')
            ->add('user')
            ->add('stateorder')
            ->add('payment')
            ->add('delivery_id')
            ->add('billing_id')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LEM_projet2\AdminBundle\Entity\Orders'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lem_projet2_adminbundle_orders';
    }
}
