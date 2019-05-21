<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Mail controller.
 *
 */
class MailController extends Controller
{
    /**
     * Lists all mail entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mails = $em->getRepository('AppBundle:Mail')->findAll();

        return $this->render('mail/index.html.twig', array(
            'mails' => $mails,
        ));
    }

    /**
     * Creates a new mail entity.
     *
     */
    public function newAction(Request $request)
    {
        $mail = new Mail();
        $form = $this->createForm('AppBundle\Form\MailType', $mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('mail_show', array('id' => $mail->getId()));
        }

        return $this->render('mail/new.html.twig', array(
            'mail' => $mail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mail entity.
     *
     */
    public function showAction(Mail $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);

        return $this->render('mail/show.html.twig', array(
            'mail' => $mail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mail entity.
     *
     */
    public function editAction(Request $request, Mail $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);
        $editForm = $this->createForm('AppBundle\Form\MailType', $mail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mail_edit', array('id' => $mail->getId()));
        }

        return $this->render('mail/edit.html.twig', array(
            'mail' => $mail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mail entity.
     *
     */
    public function deleteAction(Request $request, Mail $mail)
    {
        $form = $this->createDeleteForm($mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mail);
            $em->flush();
        }

        return $this->redirectToRoute('mail_index');
    }

    /**
     * Creates a form to delete a mail entity.
     *
     * @param Mail $mail The mail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mail $mail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mail_delete', array('id' => $mail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
