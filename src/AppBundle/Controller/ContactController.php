<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact/contact.html.twig');
    }

    /**
     * @Route("/sendmail", name="sendmail")
     */
    public function sendEmailAction(Request $request)//($name, $email, $phone, $subject, $message)
    {
        $message = (new \Swift_Message($request->get('subject')))
            ->setFrom($request->get('email'))
            ->setTo('mourad.benfradj.sidratsoft@gmail.com')
            ->setBody(
                $this->renderView(
                    'contact/message.html.twig',
                    array('name'=>$request->get('name'),'phone'=>$request->get('phone'),'message' => $request->get('message')))
                ,
                'text/html'
            )/*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $this->get('mailer')->send($message);
        return $this->render('contact/contact.html.twig');
    }
}
