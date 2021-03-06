<?php

namespace L91\Sulu\Bundle\WebsiteUserBundle\Form\Type;

use Sulu\Bundle\ContactBundle\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

abstract class AbstractAddressType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface  $resolver)
    {
        $this->configureOptions($resolver);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Address::class,
            'type' => null,
            'locale' => null,
        ));
    }
}