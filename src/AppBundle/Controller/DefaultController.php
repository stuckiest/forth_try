<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
    *
    *@Route("/experiment")
    */
    public function experimentAction()
    {
    	return new Response('<html><body>Hello. You are a badass programmer!</body></html>');
    }

    /**
    *
    *@Route("/wizzywig")
    */
    public function wizzywigAction()
    {
    	return $this->render('default/wizzywig.html.twig');
    }
}


