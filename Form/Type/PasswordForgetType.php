<?php

namespace L91\Sulu\Bundle\WebsiteUserBundle\Form\Type;

use L91\Sulu\Bundle\WebsiteUserBundle\DependencyInjection\Configuration;
use Symfony\Component\Form\FormBuilderInterface;

class PasswordForgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

    public function getName()
    {
        return Configuration::TYPE_PASSWORD_FORGET;
    }
}