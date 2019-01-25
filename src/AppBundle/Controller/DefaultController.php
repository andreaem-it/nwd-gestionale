<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Announcements;
use AppBundle\Entity\Expertations;
use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'expCount' => count($expCount),
            'expertations' => $expertations,
            'announcements' => $announcements,
            'functions' => $this
        ]);
    }

    /**
     * @Route("/errore/{error}", name="error_id")
     */
    public function errorAction($error) {

        switch ($error) {
            case 1:
                $error = 'Preventivo non ancora generato';
                break;
            default:
                $error = 'Errore generico';
                break;
        }

        return $this->render('default/errors.html.twig',[
            'error' => $error
        ]);
    }

    public function uidToName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getName();
    }

    public function uidToSurName($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getSurname();
    }

    public function uidToGenre($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getGenre();
    }

    public function uidToRagSoc($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getRagioneSociale();
    }

    public function uidToType($uid) {
        return $this->getDoctrine()->getRepository('AppBundle:Clients')->find($uid)->getType();
    }

    public function userToName($user) {
        return $this->getDoctrine()->getRepository(Users::class)->find($user)->getUsername();
    }

    /**
     * @Route("/testmail")
     */
    public function testMailAction(\Swift_Mailer $mailer) {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('gestionale@nwd.it')
            ->setTo('info@andreaem.it')
            ->setBody(new Response('Prova'),
                'text/html'
            );

        $mailer->send($message);

        return new Response('OK');
    }
}
