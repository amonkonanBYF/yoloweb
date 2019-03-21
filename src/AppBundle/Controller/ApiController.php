<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use AppBundle\Entity\Velib;

class ApiController extends Controller
{
    /**
     * @Route("/api", name="apiHome")
     */
    public function getVelibAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $velos = $em->getRepository(Velib::class)->findAll();
        if (empty($velos)) {
            return  JsonResponse::HTTP_NOT_FOUND;
        }
        $serializer = $this->container->get('jms_serializer');
        $jsonContent = $serializer->serialize($velos, 'json');

        return Response::create($jsonContent);
    }
}

