<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Announcements
 *
 * @ORM\Table(name="announcements")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnouncementsRepository")
 */
class Announcements
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
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;

    /**
     * @var int
     *
     * @ORM\Column(name="creator", type="integer")
     */
    private $creator;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration", type="datetime")
     */
    private $expiration;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datetime.
     *
     * @param \DateTime $datetime
     *
     * @return Announcements
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime.
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set creator.
     *
     * @param int $creator
     *
     * @return Announcements
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator.
     *
     * @return int
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set message.
     *
     * @param string $message
     *
     * @return Announcements
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set expiration.
     *
     * @param \DateTime $expiration
     *
     * @return Announcements
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration.
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
}
