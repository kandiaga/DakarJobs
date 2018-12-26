<?php

namespace NS\HomeBundle\Controller;

//use NS\HomeBundle\Form\Type\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecentJobController extends Controller
{
    public function newJobsAction($max=8)
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
		
        return $this->render('HomeBundle:HomePage:left_side_jobs.html.twig',
		array(
		'customer_id'=> $id_customer,
		'recent_jobs' => $recent_jobs
		     )
		  );
		
    }
	
	
	public function leftCategoriesAction()
  {
      $em = $this->getDoctrine()
                   ->getManager();
        $left_categories = $em->createQueryBuilder()
                    ->select('a')
                    ->from('HomeBundle:Category',  'a')
                    ->addOrderBy('a.id', 'DESC')
                    ->getQuery()
                    ->getResult();
		
        return $this->render('HomeBundle:HomePage:left_side_categories.html.twig',
		array(		
		'left_categories' => $left_categories
		     )
		  );

   
  } 
  
  
  public function footerAction()
  {
  
     
	 
	 return $this->render('HomeBundle:HomePage:footer_content.html.twig',
		array(		
		'regions'=>$this->getRegions(),
		     )
		  );
  
  
  
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
