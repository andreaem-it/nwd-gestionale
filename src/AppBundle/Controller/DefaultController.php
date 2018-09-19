<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expertations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction() {
        return $this->redirectToRoute('dashboard');
    }


    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAction(Request $request)
    {
        $expCount = $this->getDoctrine()->getRepository(Expertations::class)->findAll();

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'expCount' => count($expCount)
        ]);
    }
}
