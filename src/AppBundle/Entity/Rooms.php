<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rooms
 *
 * @ORM\Table(name="rooms")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoomsRepository")
 */
class Rooms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var float
     *
     * @ORM\Column(name="sq_meters_from", type="float", nullable=false)
     */
    private $sq_meter_from;

    /**
     * @var float
     *
     * @ORM\Column(name="sq_meters_to", type="float", nullable=false)
     */
    private $sq_meter_to;

    /**
     * @var integer
     *
     * @ORM\Column(name="punti_prese", type="integer", nullable=false)
     */
    private $punti_prese;

    /**
     * @var integer
     *
     * @ORM\Column(name="punti_luce", type="integer", nullable=false)
     */
    private $punti_luce;

    /**
     * @var integer
     *
     * @ORM\Column(name="prese_tv", type="integer", nullable=false)
     */
    private $prese_tv;


    public function __toString() {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Rooms
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Rooms
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set sqMeterFrom
     *
     * @param float $sqMeterFrom
     *
     * @return Rooms
     */
    public function setSqMeterFrom($sqMeterFrom)
    {
        $this->sq_meter_from = $sqMeterFrom;

        return $this;
    }

    /**
     * Get sqMeterFrom
     *
     * @return float
     */
    public function getSqMeterFrom()
    {
        return $this->sq_meter_from;
    }

    /**
     * Set sqMeterTo
     *
     * @param float $sqMeterTo
     *
     * @return Rooms
     */
    public function setSqMeterTo($sqMeterTo)
    {
        $this->sq_meter_to = $sqMeterTo;

        return $this;
    }

    /**
     * Get sqMeterTo
     *
     * @return float
     */
    public function getSqMeterTo()
    {
        return $this->sq_meter_to;
    }

    /**
     * Set puntiPrese
     *
     * @param integer $puntiPrese
     *
     * @return Rooms
     */
    public function setPuntiPrese($puntiPrese)
    {
        $this->punti_prese = $puntiPrese;

        return $this;
    }

    /**
     * Get puntiPrese
     *
     * @return integer
     */
    public function getPuntiPrese()
    {
        return $this->punti_prese;
    }

    /**
     * Set puntiLuce
     *
     * @param integer $puntiLuce
     *
     * @return Rooms
     */
    public function setPuntiLuce($puntiLuce)
    {
        $this->punti_luce = $puntiLuce;

        return $this;
    }

    /**
     * Get puntiLuce
     *
     * @return integer
     */
    public function getPuntiLuce()
    {
        return $this->punti_luce;
    }

    /**
     * Set preseTv
     *
     * @param integer $preseTv
     *
     * @return Rooms
     */
    public function setPreseTv($preseTv)
    {
        $this->prese_tv = $preseTv;

        return $this;
    }

    /**
     * Get preseTv
     *
     * @return integer
     */
    public function getPreseTv()
    {
        return $this->prese_tv;
    }
}
