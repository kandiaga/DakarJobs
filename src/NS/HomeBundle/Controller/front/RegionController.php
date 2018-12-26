<?php

namespace NS\HomeBundle\Controller\front;

//use NS\HomeBundle\Form\Type\ContactType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NS\HomeBundle\Entity\Region;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegionController extends Controller
{
    public function regionJobsAction($id,$page=1)
    {
	    $id_customer=4;		
		
		$repository = $this->getDoctrine()->getRepository('HomeBundle:Region');
        $region= $repository->find($id);
		
		$id_region=$id;
		
	    
             if ($page < 1) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
	  $nbPerPage=3;
	   $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('HomeBundle:Job')
            ->getJobsByRegion($page, $nbPerPage,$id_region);			
			 
    $nbPages = ceil(count($listAdverts)/$nbPerPage);
	
	if (count($listAdverts)<1) {
      throw $this->createNotFoundException("Pas d'offre dans la region id: ".$id_region." pour le moment.");
    }
    
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
			
        return $this->render('HomeBundle:front/Job:region_jobs.html.twig',
		array(		
		'customer_id'=>$id_customer,
		'cat_id'=>$id,
		'region_name'=>$region->getName(),
		'Joblist'=>$listAdverts,
        'nbPages'=> $nbPages,
        'page'=> $page
		     )
		  );
		
    }
	
	

}
