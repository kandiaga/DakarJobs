<?php

namespace NS\HomeBundle\Controller\front;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NS\HomeBundle\Entity\BlogPost;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogPostController extends Controller
{
    
	
	   public function indexAction(Request $request)
    {
	    $id_customer=4;			
		$page =1;
	    
             if ($page < 1) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
	  
	   $blogList = $this->getDoctrine()
            ->getManager()
            ->getRepository('HomeBundle:BlogPost')
            ;	
			    
	
	if (count($blogList)<1) {
      throw $this->createNotFoundException("Pas d'offre dans la region id: ".$page." pour le moment.");
    }
    
    
			
        return $this->render('HomeBundle:front/Blog:blog_all.html.twig',
		array(		
		'customer_id'=>$id_customer,		
		'blogList'=>$blogList->findAll(),        
		     )
		  );
		
    }
	
	
	
	public function viewAction($idpost)
    {
	    
        $id_customer=4;
		
		$repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('HomeBundle:BlogPost');
    
       $blog= $repository->find($idpost);	
	   
    
    if (null ===$blog) {
      throw new NotFoundHttpException("L'annonce d'id ".$idpost." n'existe pas.");
    }      
		
        $page_url='http://prestatuts.com/en/';
		
        return $this->render('HomeBundle:front/Blog:single.html.twig',
		array(		
		'customer_id'=>$id_customer,
        'blog'=>$blog,
        'blog_posts'=>$this->getRelatedBlogPost($blog->id_blogpost_category),
        'page_url'=>$page_url, 
        'default_number'=>7,		
		     )
		  );
		
    }
	
	
	
	 public function getRelatedBlogPost($id_blogpost_category){  
       
   $repository=$this->getDoctrine()->getManager();
	 
	 $categories=$repository->createQueryBuilder()
                    ->select('b')
                    ->from('HomeBundle:BlogPost',  'b')
					->where('b.id_blogpost_category =:id_blogpost_category')	
                    ->setParameter('id_blogpost_category', $id_blogpost_category)
                    ->addOrderBy('b.id', 'DESC')
                    ->getQuery()
                    ->getResult();	
     
    return $categories;  	
  
  
  }
	
	
	
	
	
}