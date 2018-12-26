<?php

namespace NS\HomeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//
use Doctrine\ORM\EntityManager;


class ResumeType extends AbstractType
{
    
	
	
	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
	       
	
       		$builder				
		    ->add('resume_firstname')
            ->add('resume_lastname')
			->add('resume_email')
			//->add('id_employee')
			//->add('resume_logo')
			->add('resume_phone')
		    ->add('resume_address_one')
			->add('resume_address_two')
			->add('resume_alias')
			//->add('resume_diplome_level')
			->add('resume_diplome')
			//->add('resume_region')
			->add('resume_diplome_university')
			//->add('resume_diplome_country')
			->add('resume_diplome_year')				
            ->add('resume_skills', 'textarea', array(
                   'attr' => array(
                    'class' => 'form-control input-sm input-sm'                   
                 )
                )			     
				 )
				 
		    ->add('resume_hobby', 'textarea', array(
                   'attr' => array(
                    'class' => 'form-control input-sm input-sm'                   
                 )
                )			     
				 )		 
					
			->add('Ajouter', 'submit')
            ->getForm();
    }

	
	
	
	
	
	
	public function configureOptions(OptionsResolver $resolver)
   {
    $resolver->setDefaults(array(
        'data_class' => 'HomeBundle\Entity\Resume',
    ));
   }
   
   
  
      
	
    public function getName()
    {
        return 'resume';
    }
	
	

	
	
	
}