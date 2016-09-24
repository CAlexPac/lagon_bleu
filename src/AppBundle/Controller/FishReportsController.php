<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Reports;
use AppBundle\Form\FishReportType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FishReportsController extends Controller
{

    /**
     * @Route("/fish-reports", name="fish-reports")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('fish-reports/list.html.twig');
    }

    /**
     * @Route("/fish-reports/create", name="create-fish-report")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $report = new Reports();
        $form   = $this->createForm(FishReportType::class, $report);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $report = $form->getData();
            $em   = $this->getDoctrine()->getManager();
            $em->persist($report);
            $em->flush();

            return $this->redirectToRoute('fish-reports');
        }

        return $this->render('fish-reports/create.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
