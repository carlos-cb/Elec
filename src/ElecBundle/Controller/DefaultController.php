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

    public function cartAction()
    {
        $user = $this->getUser();
        $cartItems = $user->getCart()->getCartItems();

        return $this->render('ElecBundle:Default:cart.html.twig', array(
            'cartItems' => $cartItems,
        ));
    }

    /**
     * Lists all CartItem entities.
     *
     */
    public function addToCartAction(Product $product)
    {
        $user = $this->getUser();
        $cart = $user->getCart();

        $em = $this->getDoctrine()->getManager();
        $cartItemExiste = $em->getRepository('ElecBundle:CartItem')->findBy(
            array('product' => $product, 'cart' => $cart)
        );

        if(!$cartItemExiste){
            $cartItem = new CartItem();
            $cartItem->setCart($user->getCart())
                     ->setProduct($product)
                     ->setQuantity($product->getBuyMinNumber())
                     ->setUnitPrice($product->getMarketPrice());

            $em->persist($cartItem);
            $em->flush();
        }else{
            throw $this->createNotFoundException(
                'Cart already have this Item ');
        }

        return $this->redirectToRoute("elec_homepage_cart");
    }

    public function deleteFromCartAction(CartItem $cartItem)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($cartItem);
        $em->flush();

        return $this->redirectToRoute("elec_homepage_cart");
    }
}
