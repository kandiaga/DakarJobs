<?php

namespace NS\HomeBundle\Controller\front;


use NS\HomeBundle\Form\Type\JobType;
use NS\HomeBundle\Entity\Job;
use NS\HomeBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class JobController extends Controller
{
    public function indexAction($page)
    {		   
      $id_customer=4;
	     if ($page < 1) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
	  $nbPerPage=3;
	   $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('HomeBundle:Job')
            ->getJobs($page, $nbPerPage);			
			 
    $nbPages = ceil(count($listAdverts)/$nbPerPage);
    
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
	  
	  
		
        return $this->render('HomeBundle:front/Job:jobs.html.twig',
		array(
		'customer_id' => $id_customer,
		'Joblist'=>$listAdverts,
        'nbPages'=> $nbPages,
        'page'=> $page
		     )
		  );
		
     
		
		
    }	
	
	public function viewAction($id){	
	
    $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('HomeBundle:Job');
    
    $job= $repository->find($id);	
	
    
    if (null === $job) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }      
    
	
   
    return $this->render('HomeBundle:front/Job:jobs_single.html.twig', array(
      'job' => $job,	 
	  'customer_id'=>4,
	  'category'=>$this->getCurrentJobCategory($job->id_category),
	  'region'=>$this->getCurrentJobRegion($job->id_region),
	  'similar_jobs'=>$this->getSimilarJobs($job->id_category),
      
    ));
	
	}	
	
	public function addAction(Request $request){

    $job=new Job();		
	
   
	$form =$this->createForm(new JobType(), $job); 	
	
	$form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {	
	
	     $id_customer=4;
	
	    //$password =md5($request->request->get('password'));
		    $id_category =3;  //$request->request->get('id_category');
			$id_region = 7;  //$request->request->get('id_region');
			$location ='Dakar';  //$request->request->get('id_region');
			$job->setIdCustomer($id_customer);
			$job->setDate(new \DateTime("now"));
            $job->setUpdatedAt(new \DateTime('now'));			
			$job->setIdRegion($id_region);
			$job->setIdCategory($id_category); 
			$job->setLocation($location); 
        
        $job = $form->getData();
		$em = $this->getDoctrine()->getManager();    
		
		 $em->persist($job); 
         
		 
        $em->flush();   
	return $this->redirect('../job/'.$job->id);
	
    }	
	
	$id_customer=4;
	
	return $this->render('HomeBundle:front/Job:add.html.twig', array(
	'form' => $form->createView(),
	'customer_id' => $id_customer,
        ));
	
	}
	
	
	
	public function editAction($id, Request $request)
  {
     $em = $this->getDoctrine()->getManager();    
    $job = $em->getRepository('HomeBundle:Job')->find($id);
  	$form =$this->createForm(new JobType(), $job);     
	
	
	$form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
	
	
	      $id_customer=4;
	
	        $id_category =$request->request->get('id_category');
			$id_region =$request->request->get('id_region');
			$job->setIdCustomer($id_customer);
			$job->setDate(new \DateTime("now"));
            $job->setUpdatedAt(new \DateTime('now'));			
			$job->setIdRegion($id_region);
			$job->setIdCategory($id_category);
	
        
        $job= $form->getData();
		$em = $this->getDoctrine()->getManager(); 
		
         $em->persist($job);		
         
		 
        $em->flush();      

        return $this->redirect('../'.$id);
    }
            
  
    if (null === $job) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    
    $em->flush();

    $id_customer=4;

    return $this->render('HomeBundle:front/Job:edit.html.twig', array(
	'form' => $form->createView(),
	'job'=>$job,
	'customer_id'=>$id_customer,
	'categories'=>$this->getCategories(),
	'regions'=>$this->getRegions(),
        )
	 );
	 
	 
	
  }

  public function deleteAction($id)
  {  
    $em = $this->getDoctrine()->getManager();
	
    $job = $em->getRepository('HomeBundle:Job')->find($id);

    if (null === $job) {
      throw new NotFoundHttpException("Job id ".$id." not found.");
    }
	
	$em->remove($job);
    $em->flush(); 
    
   return $this->render('HomeBundle:front/Job:delete.html.twig',
	      array('id_job'=>$id));
	
	 
  }
  
  public function menuAction()
  {
    
    $em = $this->getDoctrine()
                   ->getManager();
        $listJobs = $em->createQueryBuilder()
                    ->select('a')
                    ->from('HomeBundle:Job',  'a')
                    ->addOrderBy('a.id', 'DESC')
                    ->getQuery()
                    ->getResult();

    return $this->render('HomeBundle:front/Job:menu.html.twig', array(      
      'listJobs' => $listJobs
    ));
  }
  
  
  public function getCategories(){  
       
	 $repository=$this->getDoctrine()->getManager();
	 
	 $table2Objects=$repository->createQueryBuilder()
                    ->select('c')
                    ->from('HomeBundle:Category',  'c')
                    ->addOrderBy('c.id', 'DESC')
                    ->getQuery()
                    ->getResult();	
     
    return $table2Objects;  
  
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
  
    public function getCurrentJobCategory($id_category) {	    
		
		$repository = $this->getDoctrine()->getRepository('HomeBundle:Category');
        $category = $repository->find($id_category);
	
	     return $category;
	
	}

  
   public function getCurrentJobRegion($id_region) {	    
		
		$repository = $this->getDoctrine()->getRepository('HomeBundle:Region');
        $region = $repository->find($id_region);
	
	     return $region;
	
	} 
	
	 
	 public function getSimilarJobs($id_category){
	 
	 $em = $this->getDoctrine()
                   ->getManager();
        $listSimilarJobs = $em->createQueryBuilder()
                    ->select('a')
                    ->from('HomeBundle:Job',  'a')
					->where('a.id_category =:id_category')	
                    ->setParameter('id_category', $id_category)
                    ->addOrderBy('a.id', 'DESC')
                    ->getQuery()
                    ->getResult();

    
      return  $listSimilarJobs;	 
	 
	 
	 }
  
	
}
