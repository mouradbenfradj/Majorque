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
    public function sendEmailAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact/contact.html.twig');
    }
}
