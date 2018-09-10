<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Outlets
 *
 * @ORM\Table(name="outlets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OutletsRepository")
 */
class Outlets
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
     * @var int
     *
     * @ORM\Column(name="room_id", type="integer")
     */
    private $roomId;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="outlets", type="integer")
     */
    private $outlets;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set roomId
     *
     * @param integer $roomId
     *
     * @return Outlets
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;

        return $this;
    }

    /**
     * Get roomId
     *
     * @return int
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Outlets
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set outlets
     *
     * @param integer $outlets
     *
     * @return Outlets
     */
    public function setOutlets($outlets)
    {
        $this->outlets = $outlets;

        return $this;
    }

    /**
     * Get outlets
     *
     * @return int
     */
    public function getOutlets()
    {
        return $this->outlets;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Outlets
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
}
