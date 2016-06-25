<?php

namespace ElecBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Lists all Product entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('ElecBundle:Product')->findAll();

        return $this->render('ElecBundle:Default:index.html.twig', array(
            'products' => $products,
        ));
    }
    
    public function backEndAction()
    {
        return $this->render('ElecBundle:BackEnd:overview.html.twig');
    }
}
