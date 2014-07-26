<?php

namespace IFC\IfcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IFCIfcBundle:Default:index.html.twig', array('name' => $name));
    }
}
