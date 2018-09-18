<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 *
 * @ORM\Table(name="prices")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PricesRepository")
 */
class Prices
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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="canonical", type="string", length=255, nullable=true)
     */
    private $canonical;


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
     * Set price.
     *
     * @param float $price
     *
     * @return Prices
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
     * Set name.
     *
     * @param string $name
     *
     * @return Prices
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set canonical.
     *
     * @param string|null $canonical
     *
     * @return Prices
     */
    public function setCanonical($canonical = null)
    {
        $this->canonical = $canonical;

        return $this;
    }

    /**
     * Get canonical.
     *
     * @return string|null
     */
    public function getCanonical()
    {
        return $this->canonical;
    }
}
