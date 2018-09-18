<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class PricesController extends Controller
{
    /**
     *@Route("/prezzi/listino", name="prices_list")
     */
    public function pricesListAction(Request $request) {
        $list = $this->getDoctrine()->getRepository('AppBundle:Prices')->findAll();

        return $this->render('prices/list.html.twig', [
           'items' => $list
        ]);
    }
}