<?php
# src/NS/HomeBundle/Controller/front/LoginController.php

namespace NS\HomeBundle\Controller\front;
use NS\HomeBundle\Form\Type\LoginType;

use NS\HomeBundle\Entity\Customer;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Session\Session;


class LoginController extends Controller
{

   /**
    * Registration
    *
    * @author Ndiaga Ka
    */
    public function indexAction(Request $request)
    {
        $form = $this->get('form.factory')->create(new LoginType());       
	
	 $password ='d41d8cd98f00b204e9800998ecf8427e';
	 $email=$request->request->get('email');	 
	 //$password =md5($request->request->get('password'));
	 
	 $id_customer=4; //$this->CustomerExiste($email,$password);
	 
	if(!empty($id_customer)){	 
	 
	 $em = $this->getDoctrine()->getManager();
	 
     $customer= $em->getRepository('HomeBundle:Customer')->find($id_customer);
	 
	 
	 $session=$request->getSession();
     $session->start();

      // set and get session attributes
     $session->set('email', $customer->getEmail());
     $session->get('email');	 
	 $session->set('password', $customer->getPassword());
     $session->get('password');
	 
	 $session->set('firstname', $customer->getFirstname()); 
	 
	 $session->set('lastname', $customer->getLastname());
	 
	 $session->set('customer_id', $id_customer);
      	 
		//$em->persist($customer);   
        //$em->flush();   
	 
	 }

	 $last_name=$session->get('firstname');
	 $first_name=$session->get('lastname');	
	 $customer_id=$session->get('customer_id');	
	 
        return $this->render('HomeBundle:front/Login:login.html.twig',
                array(
                    'form' => $form->createView(),                    
					'first_name'=>$first_name,
					'last_name'=>$last_name,
					'customer_id'=>$customer_id,
					'regions'=>$this->getRegions(),
					
                ));

    }
	
	
	public function CustomerExiste($email,$password){

       $id_customer=0;	
	
	 $em = $this->getDoctrine()->getManager(); // ...or getEntityManager() prior to Symfony 2.1
     $connection = $em->getConnection();
     $statement = $connection->prepare("SELECT id FROM customer WHERE email = :email  AND password= :password LIMIT 0,1");
     $statement->bindValue('email',$email);	 
	 $statement->bindValue('password', $password);
     $statement->execute();
     $results = $statement->fetchAll();
	
	 foreach($results as $result){
	 
	   $id_customer=$result['id'];
	 
	 } 
	
	  return $id_customer;
	
	
	
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
