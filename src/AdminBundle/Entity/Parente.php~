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
     * @var int
     *
     * @ORM\Column(name="num_individu", type="integer", unique=true)
     */
    private $numIndividu;

    /**
     * @var int
     *
     * @ORM\Column(name="num_individu_Individu", type="integer", unique=true)
     */
    private $numIndividuIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="relation", type="string", length=255)
     */
    private $relation;


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
     * Set numIndividu
     *
     * @param integer $numIndividu
     * @return Parente
     */
    public function setNumIndividu($numIndividu)
    {
        $this->numIndividu = $numIndividu;

        return $this;
    }

    /**
     * Get numIndividu
     *
     * @return integer 
     */
    public function getNumIndividu()
    {
        return $this->numIndividu;
    }

    /**
     * Set numIndividuIndividu
     *
     * @param integer $numIndividuIndividu
     * @return Parente
     */
    public function setNumIndividuIndividu($numIndividuIndividu)
    {
        $this->numIndividuIndividu = $numIndividuIndividu;

        return $this;
    }

    /**
     * Get numIndividuIndividu
     *
     * @return integer 
     */
    public function getNumIndividuIndividu()
    {
        return $this->numIndividuIndividu;
    }

    /**
     * Set relation
     *
     * @param string $relation
     * @return Parente
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Get relation
     *
     * @return string 
     */
    public function getRelation()
    {
        return $this->relation;
    }
}
