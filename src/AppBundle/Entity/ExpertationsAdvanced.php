<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpertationsAdvanced
 *
 * @ORM\Table(name="expertations_advanced")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpertationsAdvancedRepository")
 */
class ExpertationsAdvanced
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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="kw", type="integer")
     */
    private $kw;

    /**
     * @var int
     *
     * @ORM\Column(name="piani_casa", type="integer")
     */
    private $pianiCasa;

    /**
     * @var int
     *
     * @ORM\Column(name="riscaldamento", type="integer")
     */
    private $riscaldamento;

    /**
     * @var int
     *
     * @ORM\Column(name="opere_murarie", type="integer")
     */
    private $opereMurarie;

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
    private $squareMeters;

    /**
     * @var int
     *
     * @ORM\Column(name="floor", type="integer")
     */
    private $floor;


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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return ExpertationsAdvanced
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client.
     *
     * @param int $client
     *
     * @return ExpertationsAdvanced
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return int
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return ExpertationsAdvanced
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set tipo.
     *
     * @param int $tipo
     *
     * @return ExpertationsAdvanced
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set kw.
     *
     * @param int $kw
     *
     * @return ExpertationsAdvanced
     */
    public function setKw($kw)
    {
        $this->kw = $kw;

        return $this;
    }

    /**
     * Get kw.
     *
     * @return int
     */
    public function getKw()
    {
        return $this->kw;
    }

    /**
     * Set pianiCasa.
     *
     * @param int $pianiCasa
     *
     * @return ExpertationsAdvanced
     */
    public function setPianiCasa($pianiCasa)
    {
        $this->pianiCasa = $pianiCasa;

        return $this;
    }

    /**
     * Get pianiCasa.
     *
     * @return int
     */
    public function getPianiCasa()
    {
        return $this->pianiCasa;
    }

    /**
     * Set riscaldamento.
     *
     * @param int $riscaldamento
     *
     * @return ExpertationsAdvanced
     */
    public function setRiscaldamento($riscaldamento)
    {
        $this->riscaldamento = $riscaldamento;

        return $this;
    }

    /**
     * Get riscaldamento.
     *
     * @return int
     */
    public function getRiscaldamento()
    {
        return $this->riscaldamento;
    }

    /**
     * Set opereMurarie.
     *
     * @param int $opereMurarie
     *
     * @return ExpertationsAdvanced
     */
    public function setOpereMurarie($opereMurarie)
    {
        $this->opereMurarie = $opereMurarie;

        return $this;
    }

    /**
     * Get opereMurarie.
     *
     * @return int
     */
    public function getOpereMurarie()
    {
        return $this->opereMurarie;
    }

    /**
     * Set sconto.
     *
     * @param float $sconto
     *
     * @return ExpertationsAdvanced
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto.
     *
     * @return float
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set level.
     *
     * @param int $level
     *
     * @return ExpertationsAdvanced
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level.
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set squareMeters.
     *
     * @param int $squareMeters
     *
     * @return ExpertationsAdvanced
     */
    public function setSquareMeters($squareMeters)
    {
        $this->squareMeters = $squareMeters;

        return $this;
    }

    /**
     * Get squareMeters.
     *
     * @return int
     */
    public function getSquareMeters()
    {
        return $this->squareMeters;
    }

    /**
     * Set floor.
     *
     * @param int $floor
     *
     * @return ExpertationsAdvanced
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor.
     *
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }
}
