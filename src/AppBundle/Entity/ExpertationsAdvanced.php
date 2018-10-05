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
     * @var string
     *
     * @ORM\Column(name="val1", type="simple_array", nullable=true)
     */
    private $val1;

    /**
     * @var string
     *
     * @ORM\Column(name="val2", type="simple_array", nullable=true)
     */
    private $val2;

    /**
     * @var string
     *
     * @ORM\Column(name="val3", type="simple_array", nullable=true)
     */
    private $val3;

    /**
     * @var string
     *
     * @ORM\Column(name="val4", type="simple_array", nullable=true)
     */
    private $val4;

    /**
     * @var string
     *
     * @ORM\Column(name="val5", type="simple_array", nullable=true)
     */
    private $val5;

    /**
     * @var string
     *
     * @ORM\Column(name="val6", type="simple_array", nullable=true)
     */
    private $val6;

    /**
     * @var string
     *
     * @ORM\Column(name="val7", type="simple_array", nullable=true)
     */
    private $val7;

    /**
     * @var string
     *
     * @ORM\Column(name="val8", type="simple_array", nullable=true)
     */
    private $val8;

    /**
     * @var string
     *
     * @ORM\Column(name="val9", type="simple_array", nullable=true)
     */
    private $val9;

    /**
     * @var string
     *
     * @ORM\Column(name="val10", type="simple_array", nullable=true)
     */
    private $val10;

    /**
     * @var string
     *
     * @ORM\Column(name="val11", type="simple_array", nullable=true)
     */
    private $val11;

    /**
     * @var string
     *
     * @ORM\Column(name="val12", type="simple_array", nullable=true)
     */
    private $val12;

    /**
     * @var string
     *
     * @ORM\Column(name="val13", type="simple_array", nullable=true)
     */
    private $val13;

    /**
     * @var string
     *
     * @ORM\Column(name="val14", type="simple_array", nullable=true)
     */
    private $val14;

    /**
     * @var string
     *
     * @ORM\Column(name="val15", type="simple_array", nullable=true)
     */
    private $val15;

    /**
     * @var string
     *
     * @ORM\Column(name="val16", type="simple_array", nullable=true)
     */
    private $val16;

    /**
     * @var string
     *
     * @ORM\Column(name="val17", type="simple_array", nullable=true)
     */
    private $val17;

    /**
     * @var string
     *
     * @ORM\Column(name="val18", type="simple_array", nullable=true)
     */
    private $val18;

    /**
     * @var string
     *
     * @ORM\Column(name="val19", type="simple_array", nullable=true)
     */
    private $val19;

    /**
     * @var string
     *
     * @ORM\Column(name="val20", type="simple_array", nullable=true)
     */
    private $val20;

    /**
     * @var string
     *
     * @ORM\Column(name="val21", type="simple_array", nullable=true)
     */
    private $val21;

    /**
     * @var string
     *
     * @ORM\Column(name="val22", type="simple_array", nullable=true)
     */
    private $val22;

    /**
     * @var string
     *
     * @ORM\Column(name="val23", type="simple_array", nullable=true)
     */
    private $val23;

    /**
     * @var string
     *
     * @ORM\Column(name="val24", type="simple_array", nullable=true)
     */
    private $val24;

    /**
     * @var string
     *
     * @ORM\Column(name="val25", type="simple_array", nullable=true)
     */
    private $val25;

    /**
     * @var string
     *
     * @ORM\Column(name="val26", type="simple_array", nullable=true)
     */
    private $val26;

    /**
     * @var string
     *
     * @ORM\Column(name="val27", type="simple_array", nullable=true)
     */
    private $val27;

    /**
     * @var string
     *
     * @ORM\Column(name="val28", type="simple_array", nullable=true)
     */
    private $val28;

    /**
     * @var string
     *
     * @ORM\Column(name="val29", type="simple_array", nullable=true)
     */
    private $val29;

    /**
     * @var string
     *
     * @ORM\Column(name="val30", type="simple_array", nullable=true)
     */
    private $val30;

    /**
     * @var string
     *
     * @ORM\Column(name="val31", type="simple_array", nullable=true)
     */
    private $val31;

    /**
     * @var string
     *
     * @ORM\Column(name="val32", type="simple_array", nullable=true)
     */
    private $val32;

    /**
     * @var string
     *
     * @ORM\Column(name="val33", type="simple_array", nullable=true)
     */
    private $val33;

    /**
     * @var string
     *
     * @ORM\Column(name="val34", type="simple_array", nullable=true)
     */
    private $val34;

    /**
     * @var string
     *
     * @ORM\Column(name="val35", type="simple_array", nullable=true)
     */
    private $val35;

    /**
     * @var string
     *
     * @ORM\Column(name="val36", type="simple_array", nullable=true)
     */
    private $val36;

    /**
     * @var string
     *
     * @ORM\Column(name="val37", type="simple_array", nullable=true)
     */
    private $val37;

    /**
     * @var string
     *
     * @ORM\Column(name="val38", type="simple_array", nullable=true)
     */
    private $val38;

    /**
     * @var string
     *
     * @ORM\Column(name="val39", type="simple_array", nullable=true)
     */
    private $val39;

    /**
     * @var string
     *
     * @ORM\Column(name="val40", type="simple_array", nullable=true)
     */
    private $val40;

    /**
     * @var string
     *
     * @ORM\Column(name="val41", type="simple_array", nullable=true)
     */
    private $val41;

    /**
     * @var string
     *
     * @ORM\Column(name="val42", type="simple_array", nullable=true)
     */
    private $val42;

    /**
     * @var string
     *
     * @ORM\Column(name="val43", type="simple_array", nullable=true)
     */
    private $val43;

    /**
     * @var string
     *
     * @ORM\Column(name="val44", type="simple_array", nullable=true)
     */
    private $val44;

    /**
     * @var string
     *
     * @ORM\Column(name="val45", type="simple_array", nullable=true)
     */
    private $val45;

    /**
     * @var string
     *
     * @ORM\Column(name="val46", type="simple_array", nullable=true)
     */
    private $val46;

    /**
     * @var string
     *
     * @ORM\Column(name="val47", type="simple_array", nullable=true)
     */
    private $val47;

    /**
     * @var string
     *
     * @ORM\Column(name="val48", type="simple_array", nullable=true)
     */
    private $val48;

    /**
     * @var string
     *
     * @ORM\Column(name="val49", type="simple_array", nullable=true)
     */
    private $val49;

    /**
     * @var string
     *
     * @ORM\Column(name="val50", type="simple_array", nullable=true)
     */
    private $val50;

    /**
     * @var string
     *
     * @ORM\Column(name="val51", type="simple_array", nullable=true)
     */
    private $val51;

    /**
     * @var string
     *
     * @ORM\Column(name="val52", type="simple_array", nullable=true)
     */
    private $val52;

    /**
     * @var string
     *
     * @ORM\Column(name="val53", type="simple_array", nullable=true)
     */
    private $val53;

    /**
     * @var string
     *
     * @ORM\Column(name="val54", type="simple_array", nullable=true)
     */
    private $val54;

    /**
     * @var string
     *
     * @ORM\Column(name="val55", type="simple_array", nullable=true)
     */
    private $val55;

    /**
     * @var string
     *
     * @ORM\Column(name="val56", type="simple_array", nullable=true)
     */
    private $val56;

    /**
     * @var string
     *
     * @ORM\Column(name="val57", type="simple_array", nullable=true)
     */
    private $val57;

    /**
     * @var string
     *
     * @ORM\Column(name="val58", type="simple_array", nullable=true)
     */
    private $val58;

    /**
     * @var string
     *
     * @ORM\Column(name="val59", type="simple_array", nullable=true)
     */
    private $val59;

    /**
     * @var string
     *
     * @ORM\Column(name="val60", type="simple_array", nullable=true)
     */
    private $val60;

    /**
     * @var string
     *
     * @ORM\Column(name="val61", type="simple_array", nullable=true)
     */
    private $val61;

    /**
     * @var string
     *
     * @ORM\Column(name="val62", type="simple_array", nullable=true)
     */
    private $val62;

    /**
     * @var string
     *
     * @ORM\Column(name="val63", type="simple_array", nullable=true)
     */
    private $val63;

    /**
     * @var string
     *
     * @ORM\Column(name="val64", type="simple_array", nullable=true)
     */
    private $val64;

    /**
     * @var string
     *
     * @ORM\Column(name="val65", type="simple_array", nullable=true)
     */
    private $val65;

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

    /**
     * Set val1.
     *
     * @param array $val1
     *
     * @return ExpertationsAdvanced
     */
    public function setVal1($val1)
    {
        $this->val1 = $val1;

        return $this;
    }

    /**
     * Get val1.
     *
     * @return string
     */
    public function getVal1()
    {
        return $this->val1;
    }

    /**
     * Set val2.
     *
     * @param array $val2
     *
     * @return ExpertationsAdvanced
     */
    public function setVal2($val2)
    {
        $this->val2 = $val2;

        return $this;
    }

    /**
     * Get val2.
     *
     * @return array
     */
    public function getVal2()
    {
        return $this->val2;
    }

    /**
     * Set val3.
     *
     * @param array $val3
     *
     * @return ExpertationsAdvanced
     */
    public function setVal3($val3)
    {
        $this->val3 = $val3;

        return $this;
    }

    /**
     * Get val3.
     *
     * @return array
     */
    public function getVal3()
    {
        return $this->val3;
    }

    /**
     * Set val4.
     *
     * @param array $val4
     *
     * @return ExpertationsAdvanced
     */
    public function setVal4($val4)
    {
        $this->val4 = $val4;

        return $this;
    }

    /**
     * Get val4.
     *
     * @return array
     */
    public function getVal4()
    {
        return $this->val4;
    }

    /**
     * Set val5.
     *
     * @param array $val5
     *
     * @return ExpertationsAdvanced
     */
    public function setVal5($val5)
    {
        $this->val5 = $val5;

        return $this;
    }

    /**
     * Get val5.
     *
     * @return array
     */
    public function getVal5()
    {
        return $this->val5;
    }

    /**
     * Set val6.
     *
     * @param array $val6
     *
     * @return ExpertationsAdvanced
     */
    public function setVal6($val6)
    {
        $this->val6 = $val6;

        return $this;
    }

    /**
     * Get val6.
     *
     * @return array
     */
    public function getVal6()
    {
        return $this->val6;
    }

    /**
     * Set val7.
     *
     * @param array $val7
     *
     * @return ExpertationsAdvanced
     */
    public function setVal7($val7)
    {
        $this->val7 = $val7;

        return $this;
    }

    /**
     * Get val7.
     *
     * @return array
     */
    public function getVal7()
    {
        return $this->val7;
    }

    /**
     * Set val8.
     *
     * @param array $val8
     *
     * @return ExpertationsAdvanced
     */
    public function setVal8($val8)
    {
        $this->val8 = $val8;

        return $this;
    }

    /**
     * Get val8.
     *
     * @return array
     */
    public function getVal8()
    {
        return $this->val8;
    }

    /**
     * Set val9.
     *
     * @param array $val9
     *
     * @return ExpertationsAdvanced
     */
    public function setVal9($val9)
    {
        $this->val9 = $val9;

        return $this;
    }

    /**
     * Get val9.
     *
     * @return array
     */
    public function getVal9()
    {
        return $this->val9;
    }

    /**
     * Set val10.
     *
     * @param array $val10
     *
     * @return ExpertationsAdvanced
     */
    public function setVal10($val10)
    {
        $this->val10 = $val10;

        return $this;
    }

    /**
     * Get val10.
     *
     * @return array
     */
    public function getVal10()
    {
        return $this->val10;
    }

    /**
     * Set val11.
     *
     * @param array $val11
     *
     * @return ExpertationsAdvanced
     */
    public function setVal11($val11)
    {
        $this->val11 = $val11;

        return $this;
    }

    /**
     * Get val11.
     *
     * @return array
     */
    public function getVal11()
    {
        return $this->val11;
    }

    /**
     * Set val12.
     *
     * @param array $val12
     *
     * @return ExpertationsAdvanced
     */
    public function setVal12($val12)
    {
        $this->val12 = $val12;

        return $this;
    }

    /**
     * Get val12.
     *
     * @return array
     */
    public function getVal12()
    {
        return $this->val12;
    }

    /**
     * Set val13.
     *
     * @param array $val13
     *
     * @return ExpertationsAdvanced
     */
    public function setVal13($val13)
    {
        $this->val13 = $val13;

        return $this;
    }

    /**
     * Get val13.
     *
     * @return array
     */
    public function getVal13()
    {
        return $this->val13;
    }

    /**
     * Set val14.
     *
     * @param array $val14
     *
     * @return ExpertationsAdvanced
     */
    public function setVal14($val14)
    {
        $this->val14 = $val14;

        return $this;
    }

    /**
     * Get val14.
     *
     * @return array
     */
    public function getVal14()
    {
        return $this->val14;
    }

    /**
     * Set val15.
     *
     * @param array $val15
     *
     * @return ExpertationsAdvanced
     */
    public function setVal15($val15)
    {
        $this->val15 = $val15;

        return $this;
    }

    /**
     * Get val15.
     *
     * @return array
     */
    public function getVal15()
    {
        return $this->val15;
    }

    /**
     * Set val16.
     *
     * @param array $val16
     *
     * @return ExpertationsAdvanced
     */
    public function setVal16($val16)
    {
        $this->val16 = $val16;

        return $this;
    }

    /**
     * Get val16.
     *
     * @return array
     */
    public function getVal16()
    {
        return $this->val16;
    }

    /**
     * Set val17.
     *
     * @param array $val17
     *
     * @return ExpertationsAdvanced
     */
    public function setVal17($val17)
    {
        $this->val17 = $val17;

        return $this;
    }

    /**
     * Get val17.
     *
     * @return array
     */
    public function getVal17()
    {
        return $this->val17;
    }

    /**
     * Set val18.
     *
     * @param array $val18
     *
     * @return ExpertationsAdvanced
     */
    public function setVal18($val18)
    {
        $this->val18 = $val18;

        return $this;
    }

    /**
     * Get val18.
     *
     * @return array
     */
    public function getVal18()
    {
        return $this->val18;
    }

    /**
     * Set val19.
     *
     * @param array $val19
     *
     * @return ExpertationsAdvanced
     */
    public function setVal19($val19)
    {
        $this->val19 = $val19;

        return $this;
    }

    /**
     * Get val19.
     *
     * @return array
     */
    public function getVal19()
    {
        return $this->val19;
    }

    /**
     * Set val20.
     *
     * @param array $val20
     *
     * @return ExpertationsAdvanced
     */
    public function setVal20($val20)
    {
        $this->val20 = $val20;

        return $this;
    }

    /**
     * Get val20.
     *
     * @return array
     */
    public function getVal20()
    {
        return $this->val20;
    }

    /**
     * Set val21.
     *
     * @param array $val21
     *
     * @return ExpertationsAdvanced
     */
    public function setVal21($val21)
    {
        $this->val21 = $val21;

        return $this;
    }

    /**
     * Get val21.
     *
     * @return array
     */
    public function getVal21()
    {
        return $this->val21;
    }

    /**
     * Set val22.
     *
     * @param array $val22
     *
     * @return ExpertationsAdvanced
     */
    public function setVal22($val22)
    {
        $this->val22 = $val22;

        return $this;
    }

    /**
     * Get val22.
     *
     * @return array
     */
    public function getVal22()
    {
        return $this->val22;
    }

    /**
     * Set val23.
     *
     * @param array $val23
     *
     * @return ExpertationsAdvanced
     */
    public function setVal23($val23)
    {
        $this->val23 = $val23;

        return $this;
    }

    /**
     * Get val23.
     *
     * @return array
     */
    public function getVal23()
    {
        return $this->val23;
    }

    /**
     * Set val24.
     *
     * @param array $val24
     *
     * @return ExpertationsAdvanced
     */
    public function setVal24($val24)
    {
        $this->val24 = $val24;

        return $this;
    }

    /**
     * Get val24.
     *
     * @return array
     */
    public function getVal24()
    {
        return $this->val24;
    }

    /**
     * Set val25.
     *
     * @param array $val25
     *
     * @return ExpertationsAdvanced
     */
    public function setVal25($val25)
    {
        $this->val25 = $val25;

        return $this;
    }

    /**
     * Get val25.
     *
     * @return array
     */
    public function getVal25()
    {
        return $this->val25;
    }

    /**
     * Set val26.
     *
     * @param array $val26
     *
     * @return ExpertationsAdvanced
     */
    public function setVal26($val26)
    {
        $this->val26 = $val26;

        return $this;
    }

    /**
     * Get val26.
     *
     * @return array
     */
    public function getVal26()
    {
        return $this->val26;
    }

    /**
     * Set val27.
     *
     * @param array $val27
     *
     * @return ExpertationsAdvanced
     */
    public function setVal27($val27)
    {
        $this->val27 = $val27;

        return $this;
    }

    /**
     * Get val27.
     *
     * @return array
     */
    public function getVal27()
    {
        return $this->val27;
    }

    /**
     * Set val28.
     *
     * @param array $val28
     *
     * @return ExpertationsAdvanced
     */
    public function setVal28($val28)
    {
        $this->val28 = $val28;

        return $this;
    }

    /**
     * Get val28.
     *
     * @return array
     */
    public function getVal28()
    {
        return $this->val28;
    }

    /**
     * Set val29.
     *
     * @param array $val29
     *
     * @return ExpertationsAdvanced
     */
    public function setVal29($val29)
    {
        $this->val29 = $val29;

        return $this;
    }

    /**
     * Get val29.
     *
     * @return array
     */
    public function getVal29()
    {
        return $this->val29;
    }

    /**
     * Set val30.
     *
     * @param array $val30
     *
     * @return ExpertationsAdvanced
     */
    public function setVal30($val30)
    {
        $this->val30 = $val30;

        return $this;
    }

    /**
     * Get val30.
     *
     * @return array
     */
    public function getVal30()
    {
        return $this->val30;
    }

    /**
     * Set val31.
     *
     * @param array $val31
     *
     * @return ExpertationsAdvanced
     */
    public function setVal31($val31)
    {
        $this->val31 = $val31;

        return $this;
    }

    /**
     * Get val31.
     *
     * @return array
     */
    public function getVal31()
    {
        return $this->val31;
    }

    /**
     * Set val32.
     *
     * @param array $val32
     *
     * @return ExpertationsAdvanced
     */
    public function setVal32($val32)
    {
        $this->val32 = $val32;

        return $this;
    }

    /**
     * Get val32.
     *
     * @return array
     */
    public function getVal32()
    {
        return $this->val32;
    }

    /**
     * Set val33.
     *
     * @param array $val33
     *
     * @return ExpertationsAdvanced
     */
    public function setVal33($val33)
    {
        $this->val33 = $val33;

        return $this;
    }

    /**
     * Get val33.
     *
     * @return array
     */
    public function getVal33()
    {
        return $this->val33;
    }

    /**
     * Set val34.
     *
     * @param array $val34
     *
     * @return ExpertationsAdvanced
     */
    public function setVal34($val34)
    {
        $this->val34 = $val34;

        return $this;
    }

    /**
     * Get val34.
     *
     * @return array
     */
    public function getVal34()
    {
        return $this->val34;
    }

    /**
     * Set val35.
     *
     * @param array $val35
     *
     * @return ExpertationsAdvanced
     */
    public function setVal35($val35)
    {
        $this->val35 = $val35;

        return $this;
    }

    /**
     * Get val35.
     *
     * @return array
     */
    public function getVal35()
    {
        return $this->val35;
    }

    /**
     * Set val36.
     *
     * @param array $val36
     *
     * @return ExpertationsAdvanced
     */
    public function setVal36($val36)
    {
        $this->val36 = $val36;

        return $this;
    }

    /**
     * Get val36.
     *
     * @return array
     */
    public function getVal36()
    {
        return $this->val36;
    }

    /**
     * Set val37.
     *
     * @param array $val37
     *
     * @return ExpertationsAdvanced
     */
    public function setVal37($val37)
    {
        $this->val37 = $val37;

        return $this;
    }

    /**
     * Get val37.
     *
     * @return array
     */
    public function getVal37()
    {
        return $this->val37;
    }

    /**
     * Set val38.
     *
     * @param array $val38
     *
     * @return ExpertationsAdvanced
     */
    public function setVal38($val38)
    {
        $this->val38 = $val38;

        return $this;
    }

    /**
     * Get val38.
     *
     * @return array
     */
    public function getVal38()
    {
        return $this->val38;
    }

    /**
     * Set val39.
     *
     * @param array $val39
     *
     * @return ExpertationsAdvanced
     */
    public function setVal39($val39)
    {
        $this->val39 = $val39;

        return $this;
    }

    /**
     * Get val39.
     *
     * @return array
     */
    public function getVal39()
    {
        return $this->val39;
    }

    /**
     * Set val40.
     *
     * @param array $val40
     *
     * @return ExpertationsAdvanced
     */
    public function setVal40($val40)
    {
        $this->val40 = $val40;

        return $this;
    }

    /**
     * Get val40.
     *
     * @return array
     */
    public function getVal40()
    {
        return $this->val40;
    }

    /**
     * Set val41.
     *
     * @param array $val41
     *
     * @return ExpertationsAdvanced
     */
    public function setVal41($val41)
    {
        $this->val41 = $val41;

        return $this;
    }

    /**
     * Get val41.
     *
     * @return array
     */
    public function getVal41()
    {
        return $this->val41;
    }

    /**
     * Set val42.
     *
     * @param array $val42
     *
     * @return ExpertationsAdvanced
     */
    public function setVal42($val42)
    {
        $this->val42 = $val42;

        return $this;
    }

    /**
     * Get val42.
     *
     * @return array
     */
    public function getVal42()
    {
        return $this->val42;
    }

    /**
     * Set val43.
     *
     * @param array $val43
     *
     * @return ExpertationsAdvanced
     */
    public function setVal43($val43)
    {
        $this->val43 = $val43;

        return $this;
    }

    /**
     * Get val43.
     *
     * @return array
     */
    public function getVal43()
    {
        return $this->val43;
    }

    /**
     * Set val44.
     *
     * @param array $val44
     *
     * @return ExpertationsAdvanced
     */
    public function setVal44($val44)
    {
        $this->val44 = $val44;

        return $this;
    }

    /**
     * Get val44.
     *
     * @return array
     */
    public function getVal44()
    {
        return $this->val44;
    }

    /**
     * Set val45.
     *
     * @param array $val45
     *
     * @return ExpertationsAdvanced
     */
    public function setVal45($val45)
    {
        $this->val45 = $val45;

        return $this;
    }

    /**
     * Get val45.
     *
     * @return array
     */
    public function getVal45()
    {
        return $this->val45;
    }

    /**
     * Set val46.
     *
     * @param array $val46
     *
     * @return ExpertationsAdvanced
     */
    public function setVal46($val46)
    {
        $this->val46 = $val46;

        return $this;
    }

    /**
     * Get val46.
     *
     * @return array
     */
    public function getVal46()
    {
        return $this->val46;
    }

    /**
     * Set val47.
     *
     * @param array $val47
     *
     * @return ExpertationsAdvanced
     */
    public function setVal47($val47)
    {
        $this->val47 = $val47;

        return $this;
    }

    /**
     * Get val47.
     *
     * @return array
     */
    public function getVal47()
    {
        return $this->val47;
    }

    /**
     * Set val48.
     *
     * @param array $val48
     *
     * @return ExpertationsAdvanced
     */
    public function setVal48($val48)
    {
        $this->val48 = $val48;

        return $this;
    }

    /**
     * Get val48.
     *
     * @return array
     */
    public function getVal48()
    {
        return $this->val48;
    }

    /**
     * Set val49.
     *
     * @param array $val49
     *
     * @return ExpertationsAdvanced
     */
    public function setVal49($val49)
    {
        $this->val49 = $val49;

        return $this;
    }

    /**
     * Get val49.
     *
     * @return array
     */
    public function getVal49()
    {
        return $this->val49;
    }

    /**
     * Set val50.
     *
     * @param array $val50
     *
     * @return ExpertationsAdvanced
     */
    public function setVal50($val50)
    {
        $this->val50 = $val50;

        return $this;
    }

    /**
     * Get val50.
     *
     * @return array
     */
    public function getVal50()
    {
        return $this->val50;
    }

    /**
     * Set val51.
     *
     * @param array $val51
     *
     * @return ExpertationsAdvanced
     */
    public function setVal51($val51)
    {
        $this->val51 = $val51;

        return $this;
    }

    /**
     * Get val51.
     *
     * @return array
     */
    public function getVal51()
    {
        return $this->val51;
    }

    /**
     * Set val52.
     *
     * @param array $val52
     *
     * @return ExpertationsAdvanced
     */
    public function setVal52($val52)
    {
        $this->val52 = $val52;

        return $this;
    }

    /**
     * Get val52.
     *
     * @return array
     */
    public function getVal52()
    {
        return $this->val52;
    }

    /**
     * Set val53.
     *
     * @param array $val53
     *
     * @return ExpertationsAdvanced
     */
    public function setVal53($val53)
    {
        $this->val53 = $val53;

        return $this;
    }

    /**
     * Get val53.
     *
     * @return array
     */
    public function getVal53()
    {
        return $this->val53;
    }

    /**
     * Set val54.
     *
     * @param array $val54
     *
     * @return ExpertationsAdvanced
     */
    public function setVal54($val54)
    {
        $this->val54 = $val54;

        return $this;
    }

    /**
     * Get val54.
     *
     * @return array
     */
    public function getVal54()
    {
        return $this->val54;
    }

    /**
     * Set val55.
     *
     * @param array $val55
     *
     * @return ExpertationsAdvanced
     */
    public function setVal55($val55)
    {
        $this->val55 = $val55;

        return $this;
    }

    /**
     * Get val55.
     *
     * @return array
     */
    public function getVal55()
    {
        return $this->val55;
    }

    /**
     * Set val56.
     *
     * @param array $val56
     *
     * @return ExpertationsAdvanced
     */
    public function setVal56($val56)
    {
        $this->val56 = $val56;

        return $this;
    }

    /**
     * Get val56.
     *
     * @return array
     */
    public function getVal56()
    {
        return $this->val56;
    }

    /**
     * Set val57.
     *
     * @param array $val57
     *
     * @return ExpertationsAdvanced
     */
    public function setVal57($val57)
    {
        $this->val57 = $val57;

        return $this;
    }

    /**
     * Get val57.
     *
     * @return array
     */
    public function getVal57()
    {
        return $this->val57;
    }

    /**
     * Set val58.
     *
     * @param array $val58
     *
     * @return ExpertationsAdvanced
     */
    public function setVal58($val58)
    {
        $this->val58 = $val58;

        return $this;
    }

    /**
     * Get val58.
     *
     * @return array
     */
    public function getVal58()
    {
        return $this->val58;
    }

    /**
     * Set val59.
     *
     * @param array $val59
     *
     * @return ExpertationsAdvanced
     */
    public function setVal59($val59)
    {
        $this->val59 = $val59;

        return $this;
    }

    /**
     * Get val59.
     *
     * @return array
     */
    public function getVal59()
    {
        return $this->val59;
    }

    /**
     * Set val60.
     *
     * @param array $val60
     *
     * @return ExpertationsAdvanced
     */
    public function setVal60($val60)
    {
        $this->val60 = $val60;

        return $this;
    }

    /**
     * Get val60.
     *
     * @return array
     */
    public function getVal60()
    {
        return $this->val60;
    }

    /**
     * Set val61.
     *
     * @param array $val61
     *
     * @return ExpertationsAdvanced
     */
    public function setVal61($val61)
    {
        $this->val61 = $val61;

        return $this;
    }

    /**
     * Get val61.
     *
     * @return array
     */
    public function getVal61()
    {
        return $this->val61;
    }

    /**
     * Set val62.
     *
     * @param array $val62
     *
     * @return ExpertationsAdvanced
     */
    public function setVal62($val62)
    {
        $this->val62 = $val62;

        return $this;
    }

    /**
     * Get val62.
     *
     * @return array
     */
    public function getVal62()
    {
        return $this->val62;
    }

    /**
     * Set val63.
     *
     * @param array $val63
     *
     * @return ExpertationsAdvanced
     */
    public function setVal63($val63)
    {
        $this->val63 = $val63;

        return $this;
    }

    /**
     * Get val63.
     *
     * @return array
     */
    public function getVal63()
    {
        return $this->val63;
    }

    /**
     * Set val64.
     *
     * @param array $val64
     *
     * @return ExpertationsAdvanced
     */
    public function setVal64($val64)
    {
        $this->val64 = $val64;

        return $this;
    }

    /**
     * Get val64.
     *
     * @return array
     */
    public function getVal64()
    {
        return $this->val64;
    }

    /**
     * Set val65.
     *
     * @param array $val65
     *
     * @return ExpertationsAdvanced
     */
    public function setVal65($val65)
    {
        $this->val65 = $val65;

        return $this;
    }

    /**
     * Get val65.
     *
     * @return array
     */
    public function getVal65()
    {
        return $this->val65;
    }
}
