<?php
// src/AdminBundle/Entity/Relation.php

namespace AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Relation
 * @ORM\Table(name="relation")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RelationRepository")
 */
class Relation
{
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist", "remove"})
    * @ORM\JoinColumn(name="individu_connu_id", referencedColumnName="id",nullable=false, onDelete="CASCADE")
    */
    private $individuConnu;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist", "remove"})
    * @ORM\JoinColumn(name="individu_a_lier_id", referencedColumnName="id",nullable=false, onDelete="CASCADE")
    */
    private $individuALier;
    
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="type_de_relation", type="boolean", length=255, nullable=true)
     */
    private $typeRelation;
    
   
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeRelation
     * @param string $typeRelation
     * @return Relation
     */
    public function setTypeRelation($typeRelation)
    {
        $this->typeRelation = $typeRelation;
        return $this;
    }
    /**
     * Get typeRelation
     * @return string
     */
    public function getTypeRelation()
    {
        return $this->typeRelation;
    }

    /**
     * Set individuConnu
     * @param \AdminBundle\Entity\Individu $individuConnu
     * @return Relation
     */
    public function setIndividuConnu(\AdminBundle\Entity\Individu $individuConnu)
    {
        $this->individuConnu = $individuConnu;
        return $this;
    }

    /**
     * Get individuConnu
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividuConnu()
    {
        return $this->individuConnu;
    }

    /**
     * Set individuALier
     * @param \AdminBundle\Entity\Individu $individuALier
     * @return Relation
     */
    public function setIndividuALier(\AdminBundle\Entity\Individu $individuALier)
    {
        $this->individuALier = $individuALier;
        return $this;
    }

    /**
     * Get individuALier
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividuALier()
    {
        return $this->individuALier;
    }
}