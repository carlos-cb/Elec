<?php

namespace ElecBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productname')
            ->add('marketPrice')
            ->add('memberPrice')
            ->add('stock')
            ->add('buyMinNumber')
            ->add('imagen')
            ->add('description')
            ->add('isHot')
            ->add('isDiscount')
            ->add('createDate', 'datetime')
            ->add('cartItem')
            ->add('subCategory')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ElecBundle\Entity\Product'
        ));
    }
}
