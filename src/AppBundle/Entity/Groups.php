<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupsRepository")
 */
class Groups
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_Active", type="boolean")
     */
    private $isActive;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var array
     *
     * @ORM\Column(name="components", type="simple_array")
     */
    private $components;

    /**
     * @var int
     *
     * @ORM\Column(name="father", type="integer")
     */
    private $father;

    /**
     * @var array
     *
     * @ORM\Column(name="childs", type="simple_array")
     */
    private $childs;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Groups
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
     * Set isActive.
     *
     * @param bool $isActive
     *
     * @return Groups
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set level.
     *
     * @param int $level
     *
     * @return Groups
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
     * Set components.
     *
     * @param array $components
     *
     * @return Groups
     */
    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Get components.
     *
     * @return array
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set father.
     *
     * @param int $father
     *
     * @return Groups
     */
    public function setFather($father)
    {
        $this->father = $father;

        return $this;
    }

    /**
     * Get father.
     *
     * @return int
     */
    public function getFather()
    {
        return $this->father;
    }

    /**
     * Set childs.
     *
     * @param array $childs
     *
     * @return Groups
     */
    public function setChilds($childs)
    {
        $this->childs = $childs;

        return $this;
    }

    /**
     * Get childs.
     *
     * @return array
     */
    public function getChilds()
    {
        return $this->childs;
    }
}
