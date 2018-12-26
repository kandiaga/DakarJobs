<?php
# src/NS/HomeBundle/Form/Handler/ContactHandler.php

namespace NS\HomeBundle\Form\Handler;


use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * The ContactHandler.
 * Use for manage your form submissions
 *
 * @author Ndiaga Ka
 */
class ContactHandler
{
    protected $request;
    protected $form;
    protected $mailer;

    /**
     * Initialize the handler with the form and the request
     *
     * @param Form $form
     * @param Request $request
     * @param $mailer
     * 
     */
    public function __construct(Form $form, Request $request, $mailer)
    {
        $this->form = $form;
        $this->request = $request;
        $this->mailer = $mailer;
    }
	
    public function process()
    {
	// Check the method
    if ('POST' == $this->request->getMethod())
    {
        // Bind value with form
        $this->form->handleRequest($this->request);
		
		if ($this->form->isValid()) {

        $data = $this->form->getData();
        $this->onSuccess($data);

        return true;
		}
    }

    return false;
	
	
	}

    /**
     * Send mail on success
     * 
     * @param array $data
     * 
     */
    protected function onSuccess($data)
    {
        $message = \Swift_Message::newInstance()
                    ->setContentType('text/html')
                    ->setSubject($data['subject'])
                    ->setFrom($data['email'])
                    ->setTo('xxxxxx@gmail.com')
                    ->setBody($data['content']);

        $this->mailer->send($message);
    }
}
