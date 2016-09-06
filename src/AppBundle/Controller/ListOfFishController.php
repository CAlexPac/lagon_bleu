<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Fish;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ListOfFishController extends Controller
{

    /**
     * @Route("/list-of-fish", name="list-of-fish")
     */
    public function indexAction(Request $request)
    {
        return $this->render('list-of-fish/list.html.twig');
    }

    /**
     * @Route("/list-of-fish/add", name="add-fish")
     */
    public function newAction(Request $request)
    {
        $fish = new Fish();

        $form = $this->createFormBuilder($fish)
            ->add('scientific_name', TextType::class)
            ->add('english_name', TextType::class)
            ->add('french_name', TextType::class)
            ->add('kreol_name', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Save fish'))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $fish = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($fish);
            $em->flush();

            return $this->redirectToRoute('list-of-fish');
        }

        return $this->render('list-of-fish/add.html.twig', array(
            'form' => $form->createView()
        ));
    }

}