<?php

namespace testBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use testBundle\Entity\Slider;
use testBundle\Form\SliderType;

use testBundle\Entity\Login;
use testBundle\Modals\LoginTest;

/**
 * Slider controller.
 *
 */
class SliderController extends Controller
{

    /**
     * Lists all Slider entities.
     *
     */
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('testBundle:Slider')->findAll();

        return $this->render('testBundle:Slider:index.html.twig', array(
            'entities' => $entities,
            'name' => $name
        ));
    }
    /**
     * Creates a new Slider entity.
     *
     */
    public function createAction(Request $request,$name)
    {
        $entity = new Slider();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('slider_show', array('id' => $entity->getId())));
        }

        return $this->render('testBundle:Slider:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'name' => $name
        ));
    }

    /**
     * Creates a form to create a Slider entity.
     *
     * @param Slider $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Slider $entity)
    {
        $form = $this->createForm(new SliderType(), $entity, array(
            'action' => $this->generateUrl('slider_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Slider entity.
     *
     */
    public function newAction($name)
    {
        $entity = new Slider();
        $form   = $this->createCreateForm($entity);
        $entity->upload();
        return $this->render('testBundle:Slider:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'name' => $name
        ));
    }

    /**
     * Finds and displays a Slider entity.
     *
     */
    public function showAction($id,$name)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('testBundle:Slider')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Slider entity.');
        }
        $entity->upload();
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('testBundle:Slider:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'name' => $name
        ));
    }

    /**
     * Displays a form to edit an existing Slider entity.
     *
     */
    public function editAction($id,$name)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('testBundle:Slider')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Slider entity.');
        }
        $entity->upload();
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('testBundle:Slider:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'name' => $name
        ));
    }

    /**
    * Creates a form to edit a Slider entity.
    *
    * @param Slider $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Slider $entity)
    {
        $form = $this->createForm(new SliderType(), $entity, array(
            'action' => $this->generateUrl('slider_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Slider entity.
     *
     */
    public function updateAction(Request $request,$id,$name)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('testBundle:Slider')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Slider entity.');
        }
        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $entity->upload();
            return $this->redirect($this->generateUrl('slider_edit', array('id' => $id,'name' => $name)));
        }

        return $this->render('testBundle:Slider:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'name' => $name
        ));
    }
    /**
     * Deletes a Slider entity.
     *
     */
    public function deleteAction(Request $request,$id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('testBundle:Slider')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Slider entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('slider'));
    }

    /**
     * Creates a form to delete a Slider entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('slider_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
