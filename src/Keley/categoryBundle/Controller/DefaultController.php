<?php

namespace Keley\categoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeleycategoryBundle:Default:index.html.twig', array('name' => $name));
    }
}
