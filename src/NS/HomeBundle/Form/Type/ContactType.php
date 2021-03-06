<?php
# src/NS/HomeBundle/Form/Type/ContactType.php

namespace NS\HomeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;

class ContactType extends AbstractType
{
    
	
	
	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email')
                ->add('subject', 'text')
                ->add('content', 'textarea');
    }
	
	
	public function getDefaultOptions(array $options)
   {
    $collectionConstraint = new Collection(array(
        'email' => new Email(array('message' => 'Adresse email invalide')),
        'subject' => array(new MinLength(array('limit' => 5, 'message' => 'Sujet trop court')), new MaxLength(array('limit' => 140, 'message' => 'Sujet trop long'))),
        'content' => new MinLength(array('limit' => 40, 'message' => 'Contenu trop court')),
    ));

    return array('validation_constraint' => $collectionConstraint);
   }
	
	

    public function getName()
    {
        return 'Contact';
    }
}
?>