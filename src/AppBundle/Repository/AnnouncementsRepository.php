<?php

namespace AppBundle\Repository;

/**
 * AnnouncementsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnnouncementsRepository extends \Doctrine\ORM\EntityRepository
{
    /*public function getDescription() {
        return $this->getDescription();
    }*/

    function getLastEntity() {
        return $this->createQueryBuilder('e')
            ->orderBy('e.datetime', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
