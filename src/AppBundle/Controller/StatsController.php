<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Expertations;
//use fados\ChartjsBundle\Model\ChartBuiderData;
//use fados\ChartjsBundle\Utils\TypeCharjs;
//use fados\ChartjsBundle\Utils\TypeColors;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends Controller
{
    /**
     * @Route("/statistiche", name="statistiche")
     */
    public function statsAction()
    {
        /*dump($this->getByMonth(2018, 11));

        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_BAR);
        $grafica->setLabels(['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre']);
        $grafica->setData([
            'Preventivi' => [
                $this->getByMonth(null, 1),
                $this->getByMonth(null, 2),
                $this->getByMonth(null, 3),
                $this->getByMonth(null, 4),
                $this->getByMonth(null, 5),
                $this->getByMonth(null, 6),
                $this->getByMonth(null, 7),
                $this->getByMonth(null, 8),
                $this->getByMonth(null, 9),
                $this->getByMonth(null, 10),
                $this->getByMonth(null, 11),
                $this->getByMonth(null, 12)
            ]
        ]);
        $grafica->setBackgroundcolor([TypeColors::dark_green]);
        $grafica->setBordercolor([TypeColors::green]);
        $grafica->setHeight('250px');
        $grafica->setWidth('500px');
        $grafica->setTitle('Sample Charjs Bar');

        return $this->render('stats/summary.html.twig',[
            'graphica'=>$grafica,
            'title'=>$grafica->getTitle()
        ]);

       /* return $this->render('', [
            // ...
        ]);*/
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
