<?php

namespace NS\HomeBundle\Controller;

//use NS\HomeBundle\Form\Type\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{
    public function indexAction()
    {
	    
        $id_customer=4;
		
        return $this->render('HomeBundle:HomePage:index.html.twig',
		array(
		'customer_id'=> $id_customer,
		'regions'=>$this->getRegions(),
		'left_categories' =>$this->getCategories(),
		'blog_posts'=>$this->getBlogPost(),
		     )
		  );
		
    }
	
	
		public function featuredEmployersAction()
   {
      $id_customer=4;
     return $this->render('HomeBundle:HomePage:featured_employers.html.twig',
		array(
		'customer_id'=> $id_customer,
		     )
		  );
    
   }
	
	
	public function menuAction()
  {
      

    return 'my menu';
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
   
  
      public function getCategories(){  
       
   $repository=$this->getDoctrine()->getManager();
	 
	 $categories=$repository->createQueryBuilder()
                    ->select('c')
                    ->from('HomeBundle:Category',  'c')
                    ->addOrderBy('c.id', 'DESC')
                    ->getQuery()
                    ->getResult();	
     
    return $categories;  	
  
  
  }
  
  
  public function getBlogPost(){  
       
   $repository=$this->getDoctrine()->getManager();
	 
	 $categories=$repository->createQueryBuilder()
                    ->select('b')
                    ->from('HomeBundle:BlogPost',  'b')
                    ->addOrderBy('b.id', 'DESC')
                    ->getQuery()
                    ->getResult();	
     
    return $categories;  	
  
  
  }
  
 
  public function aboutAction(){
  
     $id_customer=4;
     return $this->render('HomeBundle:HomePage:about.html.twig',
		array(
		'customer_id'=> $id_customer,
		     )
		  ); 
  
  }
  
  public function termsAction(){
  
     $id_customer=4;
     return $this->render('HomeBundle:HomePage:terms.html.twig',
		array(
		'customer_id'=> $id_customer,		
		     )
		  );
  
  
  }
  
  
   public function featuresAction(){
  
     $id_customer=4;
     return $this->render('HomeBundle:HomePage:features.html.twig',
		array(
		'customer_id'=> $id_customer,		
		     )
		  );
  
  
  }
  
  
  
}
