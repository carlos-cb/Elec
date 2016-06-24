<?php

namespace ElecBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderInfoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('orderDate', 'datetime')
            ->add('goodsfee')
            ->add('totalPrice')
            ->add('shipFee')
            ->add('payType')
            ->add('receiverName')
            ->add('receiverPhone')
            ->add('receiverAdress')
            ->add('receiverEmail')
            ->add('receiverNation')
            ->add('receiverPostcode')
            ->add('isConfirm')
            ->add('isPayment')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElecBundle\Entity\OrderInfo'
        ));
    }
}
