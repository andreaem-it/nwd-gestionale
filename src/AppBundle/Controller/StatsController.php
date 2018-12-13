<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends Controller
{
    /**
     * @Route("/statistiche", name="statistiche")
     */
    public function statsAction()
    {


        return $this->render('stats/summary.html.twig', [
            // ...
        ]);
    }

}
