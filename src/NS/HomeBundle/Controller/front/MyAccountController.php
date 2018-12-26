<?php

namespace NS\HomeBundle\Controller\front;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyAccountController extends Controller
{
    public function indexAction(Request $request)
    {
	    
        $id_customer=4;
		
		$em = $this->getDoctrine()->getManager();    
        $customer= $em->getRepository('HomeBundle:Customer')->find($id_customer);
		
        return $this->render('HomeBundle:front/Customer:myaccount.html.twig',
		array(
		'customer'=> $customer,
		'customer_id'=>$id_customer,
		'my_jobs'=>$this->getMyJobs($id_customer),
		     )
		  );
		
    }
	
	
	public function getMyJobs($id_customer)
   {
    
    $em = $this->getDoctrine()
                   ->getManager();
        $listAdverts = $em->createQueryBuilder()
                    ->select('a')
                    ->from('HomeBundle:Job',  'a')
					->where('a.id_customer='.$id_customer)
                    ->addOrderBy('a.id', 'DESC')
                    ->getQuery()
                    ->getResult();

    return $listAdverts;
	
   }
	
	
	
	
}