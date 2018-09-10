<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expertation_Lines
 *
 * @ORM\Table(name="expertation__lines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Expertation_LinesRepository")
 */
class Expertation_Lines
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
     * @ORM\Column(name="eid", type="integer")
     */
    private $eid;

    /**
     * @var string
     *
     * @ORM\Column(name="roof", type="string", length=255)
     */
    public $roof;

    /**
     * @var int
     *
     * @ORM\Column(name="ambient", type="integer", nullable=true)
     */
    private $ambient;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="pp", type="integer")
     */
    private $pp;

    /**
     * @var int
     *
     * @ORM\Column(name="pl", type="integer")
     */
    private $pl;

    /**
     * @var int
     *
     * @ORM\Column(name="pt", type="integer")
     */
    private $pt;

    /**
     * @var string
     *
     * @ORM\Column(name="c1n", type="string", length=255, nullable=true)
     */
    private $c1n;

    /**
     * @var int
     *
     * @ORM\Column(name="c1v", type="integer", nullable=true)
     */
    private $c1v;

    /**
     * @var string
     *
     * @ORM\Column(name="c2n", type="string", length=255, nullable=true)
     */
    private $c2n;

    /**
     * @var int
     *
     * @ORM\Column(name="c2v", type="integer", nullable=true)
     */
    private $c2v;

    /**
     * @var string
     *
     * @ORM\Column(name="c3n", type="string", length=255, nullable=true)
     */
    private $c3n;

    /**
     * @var int
     *
     * @ORM\Column(name="c3v", type="integer", nullable=true)
     */
    private $c3v;

    /**
     * @var string
     *
     * @ORM\Column(name="c4n", type="string", length=255, nullable=true)
     */
    private $c4n;

    /**
     * @var int
     *
     * @ORM\Column(name="c4v", type="integer", nullable=true)
     */
    private $c4v;

    /**
     * @var string
     *
     * @ORM\Column(name="c5n", type="string", length=255, nullable=true)
     */
    private $c5n;

    /**
     * @var int
     *
     * @ORM\Column(name="c5v", type="integer", nullable=true)
     */
    private $c5v;


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
     * Set eid
     *
     * @param integer $eid
     *
     * @return Expertation_Lines
     */
    public function setEid($eid)
    {
        $this->eid = $eid;

        return $this;
    }

    /**
     * Get eid
     *
     * @return int
     */
    public function getEid()
    {
        return $this->eid;
    }

    /**
     * Set roof
     *
     * @param string $roof
     *
     * @return Expertation_Lines
     */
    public function setRoof($roof)
    {
        $this->roof = $roof;

        return $this;
    }

    /**
     * Get roof
     *
     * @return string
     */
    public function getRoof()
    {
        return $this->roof;
    }

    /**
     * Set ambient
     *
     * @param integer $ambient
     *
     * @return Expertation_Lines
     */
    public function setAmbient($ambient)
    {
        $this->ambient = $ambient;

        return $this;
    }

    /**
     * Get ambient
     *
     * @return int
     */
    public function getAmbient()
    {
        return $this->ambient;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Expertation_Lines
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
     * Set pp
     *
     * @param integer $pp
     *
     * @return Expertation_Lines
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get pp
     *
     * @return int
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Set pl
     *
     * @param integer $pl
     *
     * @return Expertation_Lines
     */
    public function setPl($pl)
    {
        $this->pl = $pl;

        return $this;
    }

    /**
     * Get pl
     *
     * @return int
     */
    public function getPl()
    {
        return $this->pl;
    }

    /**
     * Set pt
     *
     * @param integer $pt
     *
     * @return Expertation_Lines
     */
    public function setPt($pt)
    {
        $this->pt = $pt;

        return $this;
    }

    /**
     * Get pt
     *
     * @return int
     */
    public function getPt()
    {
        return $this->pt;
    }

    /**
     * Set c1n
     *
     * @param string $c1n
     *
     * @return Expertation_Lines
     */
    public function setC1n($c1n)
    {
        $this->c1n = $c1n;

        return $this;
    }

    /**
     * Get c1n
     *
     * @return string
     */
    public function getC1n()
    {
        return $this->c1n;
    }

    /**
     * Set c1v
     *
     * @param integer $c1v
     *
     * @return Expertation_Lines
     */
    public function setC1v($c1v)
    {
        $this->c1v = $c1v;

        return $this;
    }

    /**
     * Get c1v
     *
     * @return int
     */
    public function getC1v()
    {
        return $this->c1v;
    }

    /**
     * Set c2n
     *
     * @param string $c2n
     *
     * @return Expertation_Lines
     */
    public function setC2n($c2n)
    {
        $this->c2n = $c2n;

        return $this;
    }

    /**
     * Get c2n
     *
     * @return string
     */
    public function getC2n()
    {
        return $this->c2n;
    }

    /**
     * Set c2v
     *
     * @param integer $c2v
     *
     * @return Expertation_Lines
     */
    public function setC2v($c2v)
    {
        $this->c2v = $c2v;

        return $this;
    }

    /**
     * Get c2v
     *
     * @return int
     */
    public function getC2v()
    {
        return $this->c2v;
    }

    /**
     * Set c3n
     *
     * @param string $c3n
     *
     * @return Expertation_Lines
     */
    public function setC3n($c3n)
    {
        $this->c3n = $c3n;

        return $this;
    }

    /**
     * Get c3n
     *
     * @return string
     */
    public function getC3n()
    {
        return $this->c3n;
    }

    /**
     * Set c3v
     *
     * @param integer $c3v
     *
     * @return Expertation_Lines
     */
    public function setC3v($c3v)
    {
        $this->c3v = $c3v;

        return $this;
    }

    /**
     * Get c3v
     *
     * @return int
     */
    public function getC3v()
    {
        return $this->c3v;
    }

    /**
     * Set c4n
     *
     * @param string $c4n
     *
     * @return Expertation_Lines
     */
    public function setC4n($c4n)
    {
        $this->c4n = $c4n;

        return $this;
    }

    /**
     * Get c4n
     *
     * @return string
     */
    public function getC4n()
    {
        return $this->c4n;
    }

    /**
     * Set c4v
     *
     * @param integer $c4v
     *
     * @return Expertation_Lines
     */
    public function setC4v($c4v)
    {
        $this->c4v = $c4v;

        return $this;
    }

    /**
     * Get c4v
     *
     * @return int
     */
    public function getC4v()
    {
        return $this->c4v;
    }

    /**
     * Set c5n
     *
     * @param string $c5n
     *
     * @return Expertation_Lines
     */
    public function setC5n($c5n)
    {
        $this->c5n = $c5n;

        return $this;
    }

    /**
     * Get c5n
     *
     * @return string
     */
    public function getC5n()
    {
        return $this->c5n;
    }

    /**
     * Set c5v
     *
     * @param integer $c5v
     *
     * @return Expertation_Lines
     */
    public function setC5v($c5v)
    {
        $this->c5v = $c5v;

        return $this;
    }

    /**
     * Get c5v
     *
     * @return int
     */
    public function getC5v()
    {
        return $this->c5v;
    }
}

