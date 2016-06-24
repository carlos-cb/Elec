<?php

namespace ElecBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ElecBundle\Entity\SubCategory;
use ElecBundle\Form\SubCategoryType;

/**
 * SubCategory controller.
 *
 */
class SubCategoryController extends Controller
{
    /**
     * Lists all SubCategory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subCategories = $em->getRepository('ElecBundle:SubCategory')->findAll();

        return $this->render('subcategory/index.html.twig', array(
            'subCategories' => $subCategories,
        ));
    }

    /**
     * Creates a new SubCategory entity.
     *
     */
    public function newAction(Request $request)
    {
        $subCategory = new SubCategory();
        $form = $this->createForm('ElecBundle\Form\SubCategoryType', $subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subCategory);
            $em->flush();

            return $this->redirectToRoute('subcategory_show', array('id' => $subCategory->getId()));
        }

        return $this->render('subcategory/new.html.twig', array(
            'subCategory' => $subCategory,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SubCategory entity.
     *
     */
    public function showAction(SubCategory $subCategory)
    {
        $deleteForm = $this->createDeleteForm($subCategory);

        return $this->render('subcategory/show.html.twig', array(
            'subCategory' => $subCategory,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SubCategory entity.
     *
     */
    public function editAction(Request $request, SubCategory $subCategory)
    {
        $deleteForm = $this->createDeleteForm($subCategory);
        $editForm = $this->createForm('ElecBundle\Form\SubCategoryType', $subCategory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subCategory);
            $em->flush();

            return $this->redirectToRoute('subcategory_edit', array('id' => $subCategory->getId()));
        }

        return $this->render('subcategory/edit.html.twig', array(
            'subCategory' => $subCategory,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a SubCategory entity.
     *
     */
    public function deleteAction(Request $request, SubCategory $subCategory)
    {
        $form = $this->createDeleteForm($subCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($subCategory);
            $em->flush();
        }

        return $this->redirectToRoute('subcategory_index');
    }

    /**
     * Creates a form to delete a SubCategory entity.
     *
     * @param SubCategory $subCategory The SubCategory entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SubCategory $subCategory)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subcategory_delete', array('id' => $subCategory->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
