<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Announcements;
use AppBundle\Entity\Expertations;
use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction() {



        return $this->redirectToRoute('dashboard',[

        ]);
    }


    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAction(Request $request)
    {
        $expCount = $this->getDoctrine()->getRepository(Expertations::class)->findAll();

        $expertations = $this->getDoctrine()->getRepository(Expertations::class)->findBy(['created_by' => $this->getUser()]);

        //$announcements = $this->getDoctrine()->getRepository(Announcements::class)->findOneBy(['*'],['id'=>'DESC']);
        $announcements = $this->getDoctrine()->getManager()->getRepository(Announcements::class)->getLastEntity();

        dump($announcements);

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'expCount' => count($expCount),
            'expertations' => $expertations,
            'announcements' => $announcements,
            'functions' => $this
        ]);
    }

    public function uidToName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getName();
    }

    public function userToName($user) {
        return $this->getDoctrine()->getRepository(Users::class)->find($user)->getUsername();
    }
}
