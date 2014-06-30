<?php

namespace LEM_projet2\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrderItemType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('price')
            ->add('reference')
            ->add('order_id')
            ->add('item_id')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LEM_projet2\AdminBundle\Entity\OrderItem'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lem_projet2_adminbundle_orderitem';
    }
}
