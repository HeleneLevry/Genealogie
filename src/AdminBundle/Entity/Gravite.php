<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gravite
 *
 * @ORM\Table(name="gravite")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\GraviteRepository")
 */
class Gravite
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
     * @ORM\Column(name="gravite", type="string", length=255)
     */
    private $gravite;


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
     * Set gravite
     *
     * @param string $gravite
     * @return Gravite
     */
    public function setGravite($gravite)
    {
        $this->gravite = $gravite;

        return $this;
    }

    /**
     * Get gravite
     *
     * @return string 
     */
    public function getGravite()
    {
        return $this->gravite;
    }
}
