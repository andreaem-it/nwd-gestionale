<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpertationsAdvancedLines
 *
 * @ORM\Table(name="expertations_advanced_lines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpertationsAdvancedLinesRepository")
 */
class ExpertationsAdvancedLines
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isTitle", type="boolean", nullable=true)
     */
    private $isTitle;


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
     * Set code.
     *
     * @param string $code
     *
     * @return ExpertationsAdvancedLines
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return ExpertationsAdvancedLines
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isTitle.
     *
     * @param bool|null $isTitle
     *
     * @return ExpertationsAdvancedLines
     */
    public function setIsTitle($isTitle = null)
    {
        $this->isTitle = $isTitle;

        return $this;
    }

    /**
     * Get isTitle.
     *
     * @return bool|null
     */
    public function getIsTitle()
    {
        return $this->isTitle;
    }
}
