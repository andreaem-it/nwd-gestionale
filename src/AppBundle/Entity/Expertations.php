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
     * @var string
     *
     * @ORM\Column(name="pid", type="string", nullable=true)
     */
    private $pid;

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
     * @ORM\Column(name="opere_murarie_intonaco", type="boolean")
     */
    private $opere_murarie_intonaco;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opere_murarie_pietra", type="boolean")
     */
    private $opere_murarie_pietra;

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
     *
     * @ORM\Column(name="c1n", type="string", length=255, nullable=true)
     */
    private $c1n;

    /**
     * @var string
     *
     * @ORM\Column(name="c1v", type="simple_array", nullable=true)
     */
    private $c1v;

    /**
     * @var string
     *
     * @ORM\Column(name="c2n", type="string", length=255, nullable=true)
     */
    private $c2n;

    /**
     * @var string
     *
     * @ORM\Column(name="c2v", type="simple_array", nullable=true)
     */
    private $c2v;

    /**
     * @var string
     *
     * @ORM\Column(name="c3n", type="string", length=255, nullable=true)
     */
    private $c3n;

    /**
     * @var string
     *
     * @ORM\Column(name="c3v", type="simple_array", nullable=true)
     */
    private $c3v;

    /**
     * @var string
     *
     * @ORM\Column(name="c4n", type="string", length=255, nullable=true)
     */
    private $c4n;

    /**
     * @var string
     *
     * @ORM\Column(name="c4v", type="simple_array", nullable=true)
     */
    private $c4v;

    /**
     * @var string
     *
     * @ORM\Column(name="c5n", type="string", length=255, nullable=true)
     */
    private $c5n;

    /**
     * @var string
     *
     * @ORM\Column(name="c5v", type="simple_array", nullable=true)
     */
    private $c5v;

    /**
     * @var string
     *
     * @ORM\Column(name="num_circuiti", type="integer", nullable=true)
     */
    private $num_circuiti;

    /**
     * @var string
     *
     * @ORM\Column(name="num_prese_dati", type="integer", nullable=true)
     */
    private $num_prese_dati;

    /** @var integer
     *
     * @ORM\Column(name="num_prese_telefono", type="integer", nullable=true)
     */
    private $num_prese_telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="illum_sicurezza", type="integer", nullable=true)
     */
    private $illum_sicurezza;

    /**
     * @var string
     *
     * @ORM\Column(name="spd", type="integer", nullable=true)
     */
    private $spd;

    /**
     * @var string
     *
     * @ORM\Column(name="imp_ausiliari", type="integer", nullable=true)
     */
    private $imp_ausiliari;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $created_by;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_infissi", type="integer", nullable=true)
     */
    private $num_infissi;

    /**
     * @var integer
     *
     * @ORM\Column(name="cit_vid", type="integer", nullable=true)
     */
    private $cit_vid;

    /**
     * @var integer
     *
     * @ORM\Column(name="antenna", type="integer", nullable=true)
     */
    private $antenna;

    /** @var integer
     *
     * @ORM\Column(name="campanello", type="integer", nullable=true)
     */
    private $campanello;

    /**
     * @var integer
     *
     * @ORM\Column(name="allarme", type="integer", nullable=true)
     */
    private $allarme;

    /**
     * @var integer
     *
     * @ORM\Column(name="lampada", type="integer", nullable=true)
     */
    private $lampada;

    /**
     * @var string
     * @return string
     */
    public  function __toString()
    {
        return (integer) $this->id;
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

    /**
     * Set numCircuiti
     *
     * @param integer $numCircuiti
     *
     * @return Expertations
     */
    public function setNumCircuiti($numCircuiti)
    {
        $this->num_circuiti = $numCircuiti;

        return $this;
    }

    /**
     * Get numCircuiti
     *
     * @return integer
     */
    public function getNumCircuiti()
    {
        return $this->num_circuiti;
    }

    /**
     * Set illumSicurezza
     *
     * @param integer $illumSicurezza
     *
     * @return Expertations
     */
    public function setIllumSicurezza($illumSicurezza)
    {
        $this->illum_sicurezza = $illumSicurezza;

        return $this;
    }

    /**
     * Get illumSicurezza
     *
     * @return integer
     */
    public function getIllumSicurezza()
    {
        return $this->illum_sicurezza;
    }

    /**
     * Set spd
     *
     * @param integer $spd
     *
     * @return Expertations
     */
    public function setSpd($spd)
    {
        $this->spd = $spd;

        return $this;
    }

    /**
     * Get spd
     *
     * @return integer
     */
    public function getSpd()
    {
        return $this->spd;
    }

    /**
     * Set impAusiliari
     *
     * @param integer $impAusiliari
     *
     * @return Expertations
     */
    public function setImpAusiliari($impAusiliari)
    {
        $this->imp_ausiliari = $impAusiliari;

        return $this;
    }

    /**
     * Get impAusiliari
     *
     * @return integer
     */
    public function getImpAusiliari()
    {
        return $this->imp_ausiliari;
    }

    /**
     * Set c1n.
     *
     * @param string|null $c1n
     *
     * @return Expertations
     */
    public function setC1n($c1n = null)
    {
        $this->c1n = $c1n;

        return $this;
    }

    /**
     * Get c1n.
     *
     * @return string|null
     */
    public function getC1n()
    {
        return $this->c1n;
    }

    /**
     * Set c1v.
     *
     * @param int|null $c1v
     *
     * @return Expertations
     */
    public function setC1v($c1v = null)
    {
        $this->c1v = $c1v;

        return $this;
    }

    /**
     * Get c1v.
     *
     * @return int|null
     */
    public function getC1v()
    {
        return $this->c1v;
    }

    /**
     * Set c2n.
     *
     * @param string|null $c2n
     *
     * @return Expertations
     */
    public function setC2n($c2n = null)
    {
        $this->c2n = $c2n;

        return $this;
    }

    /**
     * Get c2n.
     *
     * @return string|null
     */
    public function getC2n()
    {
        return $this->c2n;
    }

    /**
     * Set c2v.
     *
     * @param int|null $c2v
     *
     * @return Expertations
     */
    public function setC2v($c2v = null)
    {
        $this->c2v = $c2v;

        return $this;
    }

    /**
     * Get c2v.
     *
     * @return int|null
     */
    public function getC2v()
    {
        return $this->c2v;
    }

    /**
     * Set c3n.
     *
     * @param string|null $c3n
     *
     * @return Expertations
     */
    public function setC3n($c3n = null)
    {
        $this->c3n = $c3n;

        return $this;
    }

    /**
     * Get c3n.
     *
     * @return string|null
     */
    public function getC3n()
    {
        return $this->c3n;
    }

    /**
     * Set c3v.
     *
     * @param int|null $c3v
     *
     * @return Expertations
     */
    public function setC3v($c3v = null)
    {
        $this->c3v = $c3v;

        return $this;
    }

    /**
     * Get c3v.
     *
     * @return int|null
     */
    public function getC3v()
    {
        return $this->c3v;
    }

    /**
     * Set c4n.
     *
     * @param string|null $c4n
     *
     * @return Expertations
     */
    public function setC4n($c4n = null)
    {
        $this->c4n = $c4n;

        return $this;
    }

    /**
     * Get c4n.
     *
     * @return string|null
     */
    public function getC4n()
    {
        return $this->c4n;
    }

    /**
     * Set c4v.
     *
     * @param int|null $c4v
     *
     * @return Expertations
     */
    public function setC4v($c4v = null)
    {
        $this->c4v = $c4v;

        return $this;
    }

    /**
     * Get c4v.
     *
     * @return int|null
     */
    public function getC4v()
    {
        return $this->c4v;
    }

    /**
     * Set c5n.
     *
     * @param string|null $c5n
     *
     * @return Expertations
     */
    public function setC5n($c5n = null)
    {
        $this->c5n = $c5n;

        return $this;
    }

    /**
     * Get c5n.
     *
     * @return string|null
     */
    public function getC5n()
    {
        return $this->c5n;
    }

    /**
     * Set c5v.
     *
     * @param int|null $c5v
     *
     * @return Expertations
     */
    public function setC5v($c5v = null)
    {
        $this->c5v = $c5v;

        return $this;
    }

    /**
     * Get c5v.
     *
     * @return int|null
     */
    public function getC5v()
    {
        return $this->c5v;
    }

    /**
     * Set createdBy.
     *
     * @param int $createdBy
     *
     * @return Expertations
     */
    public function setCreatedBy($createdBy)
    {
        $this->created_by = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Set opereMurarieIntonaco.
     *
     * @param bool $opereMurarieIntonaco
     *
     * @return Expertations
     */
    public function setOpereMurarieIntonaco($opereMurarieIntonaco)
    {
        $this->opere_murarie_intonaco = $opereMurarieIntonaco;

        return $this;
    }

    /**
     * Get opereMurarieIntonaco.
     *
     * @return bool
     */
    public function getOpereMurarieIntonaco()
    {
        return $this->opere_murarie_intonaco;
    }

    /**
     * Set opereMurariePietra.
     *
     * @param bool $opereMurariePietra
     *
     * @return Expertations
     */
    public function setOpereMurariePietra($opereMurariePietra)
    {
        $this->opere_murarie_pietra = $opereMurariePietra;

        return $this;
    }

    /**
     * Get opereMurariePietra.
     *
     * @return bool
     */
    public function getOpereMurariePietra()
    {
        return $this->opere_murarie_pietra;
    }

    /**
     * Set numInfissi.
     *
     * @param int|null $numInfissi
     *
     * @return Expertations
     */
    public function setNumInfissi($numInfissi = null)
    {
        $this->num_infissi = $numInfissi;

        return $this;
    }

    /**
     * Get numInfissi.
     *
     * @return int|null
     */
    public function getNumInfissi()
    {
        return $this->num_infissi;
    }

    /**
     * Set citVid.
     *
     * @param int|null $citVid
     *
     * @return Expertations
     */
    public function setCitVid($citVid = null)
    {
        $this->cit_vid = $citVid;

        return $this;
    }

    /**
     * Get citVid.
     *
     * @return int|null
     */
    public function getCitVid()
    {
        return $this->cit_vid;
    }

    /**
     * Set antenna.
     *
     * @param int|null $antenna
     *
     * @return Expertations
     */
    public function setAntenna($antenna = null)
    {
        $this->antenna = $antenna;

        return $this;
    }

    /**
     * Get antenna.
     *
     * @return int|null
     */
    public function getAntenna()
    {
        return $this->antenna;
    }

    /**
     * Set campanello.
     *
     * @param int|null $campanello
     *
     * @return Expertations
     */
    public function setCampanello($campanello = null)
    {
        $this->campanello = $campanello;

        return $this;
    }

    /**
     * Get campanello.
     *
     * @return int|null
     */
    public function getCampanello()
    {
        return $this->campanello;
    }

    /**
     * Set allarme.
     *
     * @param int|null $allarme
     *
     * @return Expertations
     */
    public function setAllarme($allarme = null)
    {
        $this->allarme = $allarme;

        return $this;
    }

    /**
     * Get allarme.
     *
     * @return int|null
     */
    public function getAllarme()
    {
        return $this->allarme;
    }

    /**
     * Set numPreseDati.
     *
     * @param int|null $numPreseDati
     *
     * @return Expertations
     */
    public function setNumPreseDati($numPreseDati = null)
    {
        $this->num_prese_dati = $numPreseDati;

        return $this;
    }

    /**
     * Get numPreseDati.
     *
     * @return int|null
     */
    public function getNumPreseDati()
    {
        return $this->num_prese_dati;
    }

    /**
     * Set numPreseTelefono.
     *
     * @param int|null $numPreseTelefono
     *
     * @return Expertations
     */
    public function setNumPreseTelefono($numPreseTelefono = null)
    {
        $this->num_prese_telefono = $numPreseTelefono;

        return $this;
    }

    /**
     * Get numPreseTelefono.
     *
     * @return int|null
     */
    public function getNumPreseTelefono()
    {
        return $this->num_prese_telefono;
    }

    /**
     * Set lampada.
     *
     * @param int|null $lampada
     *
     * @return Expertations
     */
    public function setLampada($lampada = null)
    {
        $this->lampada = $lampada;

        return $this;
    }

    /**
     * Get lampada.
     *
     * @return int|null
     */
    public function getLampada()
    {
        return $this->lampada;
    }

    /**
     * Set pid.
     *
     * @param int|null $pid
     *
     * @return Expertations
     */
    public function setPid($pid = null)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid.
     *
     * @return int|null
     */
    public function getPid()
    {
        return $this->pid;
    }
}
