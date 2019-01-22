<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientsRepository")
 */
class Clients
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
     * @var integer
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ragione_sociale", type="string", length=255, nullable=true)
     */
    private $ragione_sociale;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @var integer
     *
     * @ORM\Column(name="genre", type="integer", nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=255)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=2)
     */
    private $province;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="privacy_accepted", type="boolean")
     */
    private $privacyAccepted;

    /**
     * @var integer
     *
     * @ORM\Column(name="refereer", type="integer", nullable=true)
     */
    private $refereer;

    /**
     * @var string
     *
     * @ORM\Column(name="final_name", type="string", nullable=true)
     */
    private $finalName;

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
     * Set name
     *
     * @param string $name
     *
     * @return Clients
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
     * Set address
     *
     * @param string $address
     *
     * @return Clients
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Clients
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Clients
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Clients
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Clients
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Clients
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set privacyAccepted
     *
     * @param boolean $privacyAccepted
     *
     * @return Clients
     */
    public function setPrivacyAccepted($privacyAccepted)
    {
        $this->privacyAccepted = $privacyAccepted;

        return $this;
    }

    /**
     * Get privacyAccepted
     *
     * @return boolean
     */
    public function getPrivacyAccepted()
    {
        return $this->privacyAccepted;
    }

    /**
     * @return string
     */

    public function __toString() {
        return (string) $this->id;
    }

    /**
     * @return int
     */

    public function __toInt() {
        return $this->id;
    }

    /**
     * Set refereer.
     *
     * @param int $refereer
     *
     * @return Clients
     */
    public function setRefereer($refereer)
    {
        $this->refereer = $refereer;

        return $this;
    }

    /**
     * Get refereer.
     *
     * @return int
     */
    public function getRefereer()
    {
        return $this->refereer;
    }

    /**
     * Set surname.
     *
     * @param string $surname
     *
     * @return Clients
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set genre.
     *
     * @param int $genre
     *
     * @return Clients
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre.
     *
     * @return int
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set type.
     *
     * @param int|null $type
     *
     * @return Clients
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ragioneSociale.
     *
     * @param string|null $ragioneSociale
     *
     * @return Clients
     */
    public function setRagioneSociale($ragioneSociale = null)
    {
        $this->ragione_sociale = $ragioneSociale;

        return $this;
    }

    /**
     * Get ragioneSociale.
     *
     * @return string|null
     */
    public function getRagioneSociale()
    {
        return $this->ragione_sociale;
    }

    /**
     * Set finalName.
     *
     * @param string|null $finalName
     *
     * @return Clients
     */
    public function setFinalName($finalName = null)
    {
        $this->finalName = $finalName;

        return $this;
    }

    /**
     * Get finalName.
     *
     * @return string|null
     */
    public function getFinalName()
    {
        return $this->finalName;
    }
}
