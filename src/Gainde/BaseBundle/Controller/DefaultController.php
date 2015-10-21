<?php

namespace Gainde\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GaindeBaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
