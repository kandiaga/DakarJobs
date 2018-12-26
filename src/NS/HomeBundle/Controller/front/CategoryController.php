<?php

namespace NS\HomeBundle\Controller\front;

//use NS\HomeBundle\Form\Type\ContactType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use NS\HomeBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;

class CategoryController extends Controller
{
    public function categoryJobsAction($id,$page=1)
    {
	    $id_customer=4;		
		
		
        
		$id_category=(int)$id;
		
		$repository = $this->getDoctrine()->getRepository('HomeBundle:Category');
        $category = $repository->find($id_category);
		
		
		
	    
             if ($page < 1) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
	  $nbPerPage=3;
	   $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('HomeBundle:Job')
            ->getJobs($page, $nbPerPage,$id_category);			
			 
    $nbPages = ceil(count($listAdverts)/$nbPerPage);
    
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
		
        return $this->render('HomeBundle:front/Job:category_jobs.html.twig',
		array(		
		'customer_id'=>$id_customer,
		'cat_id'=>(int)$id_category,
		'category'=>$category,
		'Joblist'=>$listAdverts,
        'nbPages'=> $nbPages,
        'page'=> $page
		     )
		  );
		
    }
	
	

}
