<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListOfFishController extends Controller
{

    /**
     * @Route("/list-of-fish", name="list-of-fish")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/list-of-fish.html.twig');
    }

    /**
     * @Route("/list-of-fish/add", name="add-fish")
     */
    public function newAction(Request $request)
    {


    }

}