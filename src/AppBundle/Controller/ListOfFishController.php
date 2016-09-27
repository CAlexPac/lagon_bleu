<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Fish;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\FishType;

class ListOfFishController extends Controller
{

    /**
     * @Route("/list-of-fish", name="list-of-fish")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Fish');
        $fish       = $repository->findAll();

        return $this->render('list-of-fish/list.html.twig', ['fish' => $fish]);
    }

    /**
     * @Route("/list-of-fish/add", name="add-fish")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $fish = new Fish();

        $form = $this->createForm(FishType::class, $fish);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fish = $form->getData();
            $em   = $this->getDoctrine()->getManager();
            $em->persist($fish);
            $em->flush();

            return $this->redirectToRoute('list-of-fish');
        }

        return $this->render('list-of-fish/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/list-of-fish/edit/{id}", name="edit-fish", requirements={"id":"\d+"})
     *
     * @param Request $request
     * @param Fish    $fish
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Fish $fish)
    {
        $em   = $this->getDoctrine()->getManager();
        $form = $this->createForm(FishType::class, $fish);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($fish);
            $em->flush();

            return $this->redirectToRoute('list-of-fish');
        }

        return $this->render('list-of-fish/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/list-of-fish/delete/{id}", name="delete-fish", requirements={"id":"\d+"})
     *
     * @param Fish $fish
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Fish $fish)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($fish);
        $em->flush();

        return $this->redirectToRoute('list-of-fish');
    }

}