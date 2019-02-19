<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Expertations;
use fados\ChartjsBundle\Model\ChartBuiderData;
use fados\ChartjsBundle\Utils\TypeCharjs;
use fados\ChartjsBundle\Utils\TypeColors;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends Controller
{
    /**
     * @Route("/statistiche", name="statistiche")
     */
    public function statsAction()
    {
        /*dump($this->getByMonth(2018, 11));*/



        return $this->render('stats/summary.html.twig',[

        ]);
    }

    function getByMonth($year = null, $month = null) {

        if ($month === null) {
            $month = (int) date('m');
        }

        if ($year === null) {
            $year = (int) date('Y');
        }


        try {
            $startDate = new \DateTimeImmutable("$year-$month-01T00:00:00");
        } catch (\Exception $e) {
        }
        $endDate = $startDate->modify('last day of this month')->setTime(23, 59, 59);

        $qb = $this->getDoctrine()->getRepository(Expertations::class)->createQueryBuilder('object');
        $qb->where($qb->expr()->between('object.date', ':start', ':end'));
        $qb->setParameter('start', $startDate->format('‌​Y-m-d H:i:s'));
        $qb->setParameter('end', $endDate->format('‌​Y-m-d H:i:s'));

        return $qb->getQuery()->getResult();
    }

}
