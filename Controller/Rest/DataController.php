<?php

namespace AppBundle\Controller\Rest;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DataController
 * @package AppBundle\Controller\Rest
 *
 * @Rest\RouteResource("Payment")
 * @Rest\Prefix("/api")
 * @Rest\NamePrefix("rest_")
 */
class DataController extends FOSRestController
{
    /**
     * @Rest\View()
     */
    public function postCalculatorDataAction(Request $request)
    {
        return new JsonResponse('data', Response::HTTP_OK);
    }
}
