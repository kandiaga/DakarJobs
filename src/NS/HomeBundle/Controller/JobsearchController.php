<?php

namespace NS\HomeBundle\Controller;

//use NS\HomeBundle\Form\Type\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobsearchController extends Controller
{
    public function indexAction()
    {
	    
        $id_customer=4;
		
		$em = $this->getDoctrine()
                   ->getManager();
        $recent_jobs = $em->createQueryBuilder()
                    ->select('a')
                    ->from('HomeBundle:Job',  'a')
                    ->addOrderBy('a.id', 'DESC')
                    ->getQuery()
                    ->getResult();
		
        return $this->render('HomeBundle:HomePage:job_search.html.twig',
		array(
		'customer_id'=> $id_customer,
		'recent_jobs' => $recent_jobs,
		'regions'=>$this->getRegions(),
		'categories'=>$this->getCategories(),
		     )
		  );
		
    }	
	
	public function getCategories()
   {
      $em = $this->getDoctrine()
                   ->getManager();
        $categories = $em->createQueryBuilder()
                    ->select('a')
                    ->from('HomeBundle:Category',  'a')
                    ->addOrderBy('a.id', 'DESC')
                    ->getQuery()
                    ->getResult();
	
	  return $categories;

   
   }    
  
   public function getRegions(){  
       
	 $repository=$this->getDoctrine()->getManager();
	 
	 $regions=$repository->createQueryBuilder()
                    ->select('r')
                    ->from('HomeBundle:Region',  'r')
                    ->addOrderBy('r.id', 'ASC')
                    ->getQuery()
                    ->getResult();	     
    return $regions;  
  
  } 
  
  
  
}
