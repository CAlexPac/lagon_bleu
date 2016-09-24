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
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
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
     * @Route("sites/edit/{id}", name="edit-site", requirements={"id":"\d+"})
     *
     * @param         $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id, Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $site = $em->getRepository('AppBundle:Sites')->find($id);

        if (!$site) {
            throw $this->createNotFoundException(
                'No site found for id ' . $id
            );
        }

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
     * @Route("sites/delete/{id}", name="delete-site", requirements={"is":"\d+"})
     *
     * @param         $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction($id, Request $request)
    {
        $em   = $this->getDoctrine()->getManager();
        $site = $em->getRepository('AppBundle:Sites')->find($id);

        if (!$site) {
            throw $this->createNotFoundException(
                'No site found for id ' . $id
            );
        }

        $em->remove($site);
        $em->flush();

        return $this->redirectToRoute('sites');
    }

}