<?php
# src/NS/HomeBundle/Controller/front/ContactController.php

namespace NS\HomeBundle\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NS\HomeBundle\Form\Type\ContactType;
use NS\HomeBundle\Form\Handler\ContactHandler;


class ContactController extends Controller
{

   /**
    * Contact
    *
    * @author Vincent Paulin
    */
    public function indexAction()
    {
        $form = $this->get('form.factory')->create(new ContactType());
        
		// Get the request
        $request = $this->get('request');

        // Get the handler
        $formHandler = new ContactHandler($form, $request, $this->get('mailer'));

        $process = $formHandler->process();

        if ($process)
        {
            // Launch the message flash
            $this->get('session')->getFlashBag()->set('notice', 'Merci de nous avoir contacte, nous repondrons a vos questions dans les plus brefs delais.');
        }
      

        return $this->render('HomeBundle:front/Contact:contact.html.twig',
		       array(
                    'form' => $form->createView(),
					'customer_id'=>4,
                    'hasError' => $request->getMethod() == 'POST' && !$form->isValid(),
					'regions'=>$this->getRegions(),
                )
                );

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
