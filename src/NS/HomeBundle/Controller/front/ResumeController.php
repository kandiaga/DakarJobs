<?php

namespace NS\HomeBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NS\HomeBundle\Form\Type\ResumeType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


use NS\HomeBundle\Entity\Resume;


class ResumeController extends Controller
{

   /**
    * Resume
    *
    * @author Ndiaga Ka
    */
	
	
	public function indexAction()
    {
	   $id_employee=1;
	
	 return $this->render('HomeBundle:front/Resume:resume.html.twig',
                array(                    
					'customer_id'=>4,
                    'my_resumes'=>$this->getMyResumes($id_employee),					
                ));
	
	}
	
	
	
    public function addAction(Request $request)
    {
        //$form = $this->get('form.factory')->create(new RegistrationType());

		
        $resume = new Resume();
        $form = $this->createForm(new ResumeType(), $resume);
        
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
            
			
			$id_employee =1;//$request->request->get('id_employee');
			$resume->setIdEmployee($id_employee);
			
			$resume_logo ='nka.jpg'   ;//$request->request->get('resume_logo');
			$resume->setResumeLogo($resume_logo);		
			
			
			$resume_diplome_level ='Bachelor';  //$request->request->get('resume_diplome_level');
			$resume->setResumeDiplomeLevel($resume_diplome_level);			
			
			$resume_region =$request->request->get('resume_region');
			$resume->setResumeRegion($resume_region);
			
			
			$resume_diplome_country ='Russia'; //$request->request->get('resume_diplome_country');
			$resume->setResumeDiplomeCountry($resume_diplome_country);
			
			
			
			$resume->setCreatedDate(new \DateTime("now"));
            $resume->setUpdatedDate(new \DateTime('now'));

            $resume = $form->getData();
		    $em = $this->getDoctrine()->getManager(); 		
		    $em->persist($resume); 		 
            $em->flush();   
           

           return $this->redirect('../resume/view/'.$resume->id);

            //return $this->redirectToRoute('replace_with_some_route');
			
		}	
		
		
     

        return $this->render('HomeBundle:front/Resume:add_resume.html.twig',
                array(
                    'form' => $form->createView(),
					'customer_id'=>4,
					'regions'=>$this->getRegions(),
                ));

    }
	

	
	public function viewAction($id){	
	
    $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('HomeBundle:Resume');
    
    $resume = $repository->find($id);
    
    /*if (null === $customer) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }  */
	
	return $this->render('HomeBundle:front/Resume:preview_resume.html.twig', array(
      'resume' => $resume,
	  'customer_id'=>4,
      
    ));	
	
	}
	
	
		public function editAction($id, Request $request)
  {
     
	 $id_customer=4;
	 
	 $em = $this->getDoctrine()->getManager();    
     $resume = $em->getRepository('HomeBundle:Resume')->find($id);
  	 $form =$this->createForm(new ResumeType(), $resume);     
	
	
	$form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
	
	
	      
	
	        $id_employee =1;//$request->request->get('id_employee');
			$resume->setIdEmployee($id_employee);
			
			$resume_logo ='nka.jpg'   ;//$request->request->get('resume_logo');
			$resume->setResumeLogo($resume_logo);		
			
			
			$resume_diplome_level ='Bachelor';  //$request->request->get('resume_diplome_level');
			$resume->setResumeDiplomeLevel($resume_diplome_level);			
			
			$resume_region =$request->request->get('resume_region');
			$resume->setResumeRegion($resume_region);
			
			
			$resume_diplome_country ='Russia'; //$request->request->get('resume_diplome_country');
			$resume->setResumeDiplomeCountry($resume_diplome_country);
			
			
			
			$resume->setCreatedDate(new \DateTime("now"));
            $resume->setUpdatedDate(new \DateTime('now'));
        
        $resume= $form->getData();
		$em = $this->getDoctrine()->getManager(); 
		
         $em->persist($resume);		
         
		 
        $em->flush();      

        return $this->redirect('../'.$id);
    }
            
  
    if (null === $resume) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    
    $em->flush();

    

    return $this->render('HomeBundle:front/Resume:resume_edit.html.twig', array(
	'form' => $form->createView(),
	'resume'=>$resume,
	'customer_id'=>$id_customer,
	'regions'=>$this->getRegions(),
	
        )
	 );
	 
	 
	
  }
	
	
	
	public function deleteAction($id)
  {  
    $em = $this->getDoctrine()->getManager();
	
    $resume = $em->getRepository('HomeBundle:Resume')->find($id);

    if (null === $job) {
      throw new NotFoundHttpException("Job id ".$id." not found.");
    }
	
	$em->remove($resume);
    $em->flush(); 
    
   return $this->render('HomeBundle:front/Resume:delete_resume.html.twig',
	      array('id_resume'=>$id));
	
	 
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
  
  
  public function getMyResumes($id_employee){  
       
	 $repository=$this->getDoctrine()->getManager();
	 
	 $resumes=$repository->createQueryBuilder()
                    ->select('r')
                    ->from('HomeBundle:Resume',  'r')
					->where('r.id_employee =:id_employee')	
                    ->setParameter('id_employee', $id_employee)
                    ->addOrderBy('r.id', 'ASC')
                    ->getQuery()
                    ->getResult();	
     
    return $resumes;  
  
  } 
  
  
  
	
	
}
