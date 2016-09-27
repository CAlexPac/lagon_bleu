<?php

namespace AppBundle\Controller;

use AppBundle\Form\SiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Sites;

class SitesController extends Controller
{

    /**
     * @Route("/sites", name="sites")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Sites');
        $sites      = $repository->findAll();

        return $this->render('sites/list.html.twig', ['sites' => $sites]);
    }

    /**
     * @Route("/sites/add", name="add-site")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $site = new Sites();
        $form = $this->createForm(SiteType::class, $site);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $site = $form->getData();
            $em   = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->flush();

            return $this->redirectToRoute('sites');
        }

        return $this->render('sites/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/sites/edit/{id}", name="edit-site", requirements={"id":"\d+"})
     *
     * @param Request $request
     * @param Sites   $site
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Sites $site)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(SiteType::class, $site);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($site);
            $em->flush();

            return $this->redirectToRoute('sites');
        }

        return $this->render('sites/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/sites/delete/{id}", name="delete-site", requirements={"id":"\d+"})
     *
     * @param Sites $site
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Sites $site)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($site);
        $em->flush();

        return $this->redirectToRoute('sites');
    }

}