<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expertations
 *
 * @ORM\Table(name="expertations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpertationsRepository")
 */
class Expertations
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="client", type="integer")
     */
    private $client;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration", type="datetime")
     */
    private $expiration;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="kw", type="integer")
     */
    private $kw;

    /**
     * @var integer
     *
     * @ORM\Column(name="piani_casa", type="integer")
     */
    private $piani_casa;

    /**
     * @var string
     *
     * @ORM\Column(name="riscaldamento", type="string")
     */
    private $riscaldamento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opere_murarie", type="boolean")
     */
    private $opere_murarie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trifase", type="boolean")
     */
    private $trifase;

    /**
     * @var float
     *
     * @ORM\Column(name="sconto", type="float")
     */
    private $sconto;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="square_meters", type="integer")
     */
    private $square_meters;

    /**
     * @var string
     *
     * @ORM\Column(name="floor", type="simple_array",nullable=true)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="ambient", type="simple_array",nullable=true)
     */
    private $ambient;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="simple_array",nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pp", type="simple_array",nullable=true)
     */
    private $pp;

    /**
     * @var string
     *
     * @ORM\Column(name="pl", type="simple_array",nullable=true)
     */
    private $pl;

    /**
     * @var string
     *
     * @ORM\Column(name="pt", type="simple_array",nullable=true)
     */
    private $pt;

    /**
     * @var string
     * @return string
     */
    public  function __toString()
    {
        return $this->id;
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Expertations
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param integer $client
     *
     * @return Expertations
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return integer
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Expertations
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Expertations
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set expiration
     *
     * @param \DateTime $expiration
     *
     * @return Expertations
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Expertations
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set kw
     *
     * @param integer $kw
     *
     * @return Expertations
     */
    public function setKw($kw)
    {
        $this->kw = $kw;

        return $this;
    }

    /**
     * Get kw
     *
     * @return integer
     */
    public function getKw()
    {
        return $this->kw;
    }

    /**
     * Set pianiCasa
     *
     * @param integer $pianiCasa
     *
     * @return Expertations
     */
    public function setPianiCasa($pianiCasa)
    {
        $this->piani_casa = $pianiCasa;

        return $this;
    }

    /**
     * Get pianiCasa
     *
     * @return integer
     */
    public function getPianiCasa()
    {
        return $this->piani_casa;
    }

    /**
     * Set riscaldamento
     *
     * @param string $riscaldamento
     *
     * @return Expertations
     */
    public function setRiscaldamento($riscaldamento)
    {
        $this->riscaldamento = $riscaldamento;

        return $this;
    }

    /**
     * Get riscaldamento
     *
     * @return string
     */
    public function getRiscaldamento()
    {
        return $this->riscaldamento;
    }

    /**
     * Set opereMurarie
     *
     * @param boolean $opereMurarie
     *
     * @return Expertations
     */
    public function setOpereMurarie($opereMurarie)
    {
        $this->opere_murarie = $opereMurarie;

        return $this;
    }

    /**
     * Get opereMurarie
     *
     * @return boolean
     */
    public function getOpereMurarie()
    {
        return $this->opere_murarie;
    }

    /**
     * Set trifase
     *
     * @param boolean $trifase
     *
     * @return Expertations
     */
    public function setTrifase($trifase)
    {
        $this->trifase = $trifase;

        return $this;
    }

    /**
     * Get trifase
     *
     * @return boolean
     */
    public function getTrifase()
    {
        return $this->trifase;
    }

    /**
     * Set sconto
     *
     * @param float $sconto
     *
     * @return Expertations
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto
     *
     * @return float
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Expertations
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
     * Set squareMeters
     *
     * @param integer $squareMeters
     *
     * @return Expertations
     */
    public function setSquareMeters($squareMeters)
    {
        $this->square_meters = $squareMeters;

        return $this;
    }

    /**
     * Get squareMeters
     *
     * @return integer
     */
    public function getSquareMeters()
    {
        return $this->square_meters;
    }

    /**
     * Set floor
     *
     * @param array $floor
     *
     * @return Expertations
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return array
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set ambient
     *
     * @param array $ambient
     *
     * @return Expertations
     */
    public function setAmbient($ambient)
    {
        $this->ambient = $ambient;

        return $this;
    }

    /**
     * Get ambient
     *
     * @return array
     */
    public function getAmbient()
    {
        return $this->ambient;
    }

    /**
     * Set name
     *
     * @param array $name
     *
     * @return Expertations
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return array
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pp
     *
     * @param array $pp
     *
     * @return Expertations
     */
    public function setPp($pp)
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * Get pp
     *
     * @return array
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * Set pl
     *
     * @param array $pl
     *
     * @return Expertations
     */
    public function setPl($pl)
    {
        $this->pl = $pl;

        return $this;
    }

    /**
     * Get pl
     *
     * @return array
     */
    public function getPl()
    {
        return $this->pl;
    }

    /**
     * Set pt
     *
     * @param array $pt
     *
     * @return Expertations
     */
    public function setPt($pt)
    {
        $this->pt = $pt;

        return $this;
    }

    /**
     * Get pt
     *
     * @return array
     */
    public function getPt()
    {
        return $this->pt;
    }
}
