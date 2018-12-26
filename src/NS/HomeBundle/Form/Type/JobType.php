<?php

namespace NS\HomeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use NS\HomeBundle\Repository\CategoryRepository;
use NS\HomeBundle\Repository\RegionRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use NS\HomeBundle\Entity\Category;
use NS\HomeBundle\Entity\Region;

//
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;



class JobType extends AbstractType
{
    
	
	
	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
	        
       		$builder			
			
		     ->add('title')
            //->add('id_customer')
            ->add('description', 'textarea', array(
                   'attr' => array(
                    'class' => 'tinymce',
					'rows' => '30',
					'cols' => '10'
                   //'data-theme' => 'bbcode' // Skip it if you want to use default theme
                 )
                )			     
				 )
			->add('requirements','textarea', array(
                   'attr' => array(
                    'class' => 'tinymce',
					'rows' => '30',
					'cols' => '10'
                   //'data-theme' => 'bbcode' // Skip it if you want to use default theme
                 )
                )
			    )
			//->add('date')			  
		->add('id_category', 'entity', array(
			'class' => 'HomeBundle:Category',
			'query_builder' => function (EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
			},
			'property' => 'name',
		))	  
		
				  
		->add('id_region', 'entity', array(
			'class' => 'HomeBundle:Region',
			'query_builder' => function (EntityRepository $er) {
				return $er->createQueryBuilder('u')
					->orderBy('u.name', 'ASC');
			},
			'property' => 'name',
		))
				  
				  
			->add('ajouter', 'submit')
            ->getForm();
    }

	
	
	
	
	
	
	public function configureOptions(OptionsResolver $resolver)
   {
    $resolver->setDefaults(array(
        'data_class' => 'HomeBundle\Entity\Job',
    ));
   }
   
   
   
   
   
   
      
	
    public function getName()
    {
        return 'job';
    }
	
	

	
	
	
}