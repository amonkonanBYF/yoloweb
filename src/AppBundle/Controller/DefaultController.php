<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Velib;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Abraham\TwitterOAuth\TwitterOAuth;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $velos = $em->getRepository(Velib::class)->findAll();
        $paginator  = $this->container->get('knp_paginator');
        $pagination = $paginator->paginate($velos,
            $request->query->getInt('page', 1),
            20);
        return $this->render('default/index.html.twig', array('pagination' => $pagination) /*compact('velos', 'pagination')*/);
    }
}
