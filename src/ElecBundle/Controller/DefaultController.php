<?php

namespace ElecBundle\Controller;

use ElecBundle\Entity\CartItem;
use ElecBundle\Entity\Product;
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

    /**
     * Lists all CartItem entities.
     *
     */
    public function addToCartAction(Product $product)
    {
        $user = $this->getUser();
        $cartItem = new CartItem();
        $cartItem->setCart($user->getCart())
                 ->setProduct($product)
                 ->setQuantity($product->getBuyMinNumber())
                 ->setUnitPrice($product->getMarketPrice());

        $em = $this->getDoctrine()->getManager();
        $em->persist($cartItem);
        $em->flush();

        $cartItems = $user->getCart()->getCartItems();

        return $this->render('ElecBundle:Default:cart.html.twig', array(
            'cartItems' => $cartItems,
        ));
    }
}
