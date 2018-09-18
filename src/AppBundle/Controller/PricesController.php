<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PricesController extends Controller {
    /**
     * @Route("/prezzi/listino", name="prezzi_listino")
     */
    public function pricesListAction()
    {
        $list = $this->getDoctrine()->getRepository('AppBundle:Prices')->findAll();

        return $this->render('prices/list.html.twig', [
            'items' => $list
        ]);
    }
}