<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FishCountReports;
use AppBundle\Entity\FishReports;
use AppBundle\Form\FishReportType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FishReportsController extends Controller
{

    /**
     * @Route("/fish-reports", name="fish-reports")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $repository   = $this->getDoctrine()->getRepository('AppBundle:FishReports');
        $fish_reports = $repository->findAll();

        return $this->render('fish-reports/list.html.twig', ['reports' => $fish_reports]);
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
        $report = new FishReports();
        $form   = $this->createForm(FishReportType::class, $report);

        $em = $this->getDoctrine()->getManager();
        $fish = $em->getRepository('AppBundle:Fish')->findAll();

        $form->add('fishCountReports', ChoiceType::class, [
            'choices'        => $fish,
            'choice_label'   => 'englishName'
        ]);

//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $report = $form->getData();
//            $em     = $this->getDoctrine()->getManager();
//            $em->persist($report);
//            $em->flush();
//
//            return $this->redirectToRoute('fish-reports');
//        }

        return $this->render('fish-reports/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/fish-reports/edit/{id}", name="edit-fish-report", requirements={"id":"\d+"})
     * @param Request     $request
     * @param FishReports $report
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, FishReports $report)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(FishReportType::class, $report);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($report);
            $em->flush();

            return $this->redirectToRoute('fish-reports');
        }

        return $this->render('fish-reports/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/fish-reports/delete/{id}", name="delete-fish-reports", requirements={"id":"\d+"})
     *
     * @param FishReports $report
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(FishReports $report)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($report);
        $em->flush();

        return $this->redirectToRoute('fish-reports');
    }
}
