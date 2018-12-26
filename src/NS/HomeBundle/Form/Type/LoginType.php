<?php

# src/NS/HomeBundle/Form/Type/LoginType.php

namespace NS\HomeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class LoginType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email')
                ->add('password', 'password')
				;
    }

    public function getName()
    {
        return 'login';
    }
}