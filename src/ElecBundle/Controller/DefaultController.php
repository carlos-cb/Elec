<?php

namespace ElecBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ElecBundle:Default:index.html.twig');
    }
}
