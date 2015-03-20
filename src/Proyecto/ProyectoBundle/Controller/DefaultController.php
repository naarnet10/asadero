<?php

namespace Proyecto\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectoBundle:Default:index.html.twig');
    }
}
