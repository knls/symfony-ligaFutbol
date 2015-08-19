<?php

namespace acanales\pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('acanalespruebaBundle:Default:index.html.twig', array('name' => $name));
    }
	public function listAction($name)
    {
        return new Response('<html><body><ul><li>Hola '.$name.'</li></ul></body></html>');
    }
}
