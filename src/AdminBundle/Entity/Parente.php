<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parente
 *
 * @ORM\Table(name="parente")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ParenteRepository")
 */
class Parente
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
     * @ORM\Column(name="nom_relation", type="string", length=255)
     */
    private $nomRelation;
    

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
     * Set nomRelation
     *
     * @param string $nomRelation
     *
     * @return Parente
     */
    public function setNomRelation($nomRelation)
    {
        $this->nomRelation = $nomRelation;

        return $this;
    }

    /**
     * Get nomRelation
     *
     * @return string
     */
    public function getNomRelation()
    {
        return $this->nomRelation;
    }
}
