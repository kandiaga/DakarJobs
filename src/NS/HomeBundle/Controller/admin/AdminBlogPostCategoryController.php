<?php

namespace NS\HomeBundle\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use NS\HomeBundle\Entity\Category;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;




class AdminBlogPostCategoryController extends Controller
{

public function indexAction(Request $request)
    {
	    
        $id_customer=4;
		
		//$em = $this->getDoctrine()->getManager();    
        //$customer= $em->getRepository('HomeBundle:Customer')->find($id_customer);
		
        return $this->render('HomeBundle:admin:admin_blog_category.html.twig',
		array(
		//'customer'=> $customer,
		//'customer_id'=>$id_customer,
		//'my_jobs'=>$this->getMyJobs($id_customer),
		     )
		  );
		
    }



}