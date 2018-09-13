<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quadri_Elettrici
 *
 * @ORM\Table(name="quadri__elettrici")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Quadri_ElettriciRepository")
 */
class Quadri_Elettrici {
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
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="area_da", type="integer")
     */
    private $areaDa;

    /**
     * @var int
     *
     * @ORM\Column(name="area_a", type="integer")
     */
    private $areaA;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="livello", type="integer", nullable=true)
     */
    private $livello;

    public function __toString()
    {
        return (string) $this->numero;
    }

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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Quadri_Elettrici
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set areaDa
     *
     * @param integer $areaDa
     *
     * @return Quadri_Elettrici
     */
    public function setAreaDa($areaDa)
    {
        $this->areaDa = $areaDa;

        return $this;
    }

    /**
     * Get areaDa
     *
     * @return int
     */
    public function getAreaDa()
    {
        return $this->areaDa;
    }

    /**
     * Set areaA
     *
     * @param integer $areaA
     *
     * @return Quadri_Elettrici
     */
    public function setAreaA($areaA)
    {
        $this->areaA = $areaA;

        return $this;
    }

    /**
     * Get areaA
     *
     * @return int
     */
    public function getAreaA()
    {
        return $this->areaA;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Quadri_Elettrici
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set livello
     *
     * @param integer $livello
     *
     * @return Quadri_Elettrici
     */
    public function setLivello($livello)
    {
        $this->livello = $livello;

        return $this;
    }

    /**
     * Get livello
     *
     * @return integer
     */
    public function getLivello()
    {
        return $this->livello;
    }
}
