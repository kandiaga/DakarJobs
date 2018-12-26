<?php
# src/NS/HomeBundle/Controller/front/RegistrationController.php

namespace NS\HomeBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NS\HomeBundle\Form\Type\RegistrationType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;




use NS\HomeBundle\Entity\Customer;

class RegistrationController extends Controller
{

   /**
    * Registration
    *
    * @author Ndiaga Ka
    */
    public function indexAction(Request $request)
    {
        //$form = $this->get('form.factory')->create(new RegistrationType());

		// 1) build the form
        $customer = new Customer();
        $form = $this->createForm(new RegistrationType(), $customer );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            //$password = $this->get('security.password_encoder')->encodePassword($customer, $customer->getPassword());
            $password =md5($request->request->get('password'));
			$customer->setPassword($password);
			$customer->setCreatedDate(new \DateTime("now"));
            $customer->setUpdatedDate(new \DateTime('now'));

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($customer);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            //return $this->redirectToRoute('replace_with_some_route');
			
		}	
		
		
     

        return $this->render('HomeBundle:front/Registration:register.html.twig',
                array(
                    'form' => $form->createView(),
					'customer_id'=>4,
					'regions'=>$this->getRegions(),
                ));

    }
	

	
	public function viewAction($id){	
	
    $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('HomeBundle:Customer');
    
    $customer = $repository->find($id);
    
    /*if (null === $customer) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }  */
	
	return $this->render('HomeBundle:front/Registration:view.html.twig', array(
      'advert' => $customer,
      
    ));	
	
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
