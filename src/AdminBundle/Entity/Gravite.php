<?php
// src/AdminBundle/Entity/Gravite.php

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
     * @ORM\Column(name="gravite_patho", type="string", length=255)
     */
    private $gravitePatho;


    

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
     * Set gravitePatho
     *
     * @param string $gravitePatho
     *
     * @return Gravite
     */
    public function setGravitePatho($gravitePatho)
    {
        $this->gravitePatho = $gravitePatho;

        return $this;
    }

    /**
     * Get gravitePatho
     *
     * @return string
     */
    public function getGravitePatho()
    {
        return $this->gravitePatho;
    }
}
