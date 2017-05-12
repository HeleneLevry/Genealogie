<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relation
 *
 * @ORM\Table(name="relation")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RelationRepository")
 */
class Relation
{
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $individuA;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $individuB;
    
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
     * @ORM\Column(name="type_relation", type="string", length=255)
     */
    private $typeRelation;
    
   

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
     * Set typeRelation
     *
     * @param string $typeRelation
     *
     * @return Relation
     */
    public function setTypeRelation($typeRelation)
    {
        $this->typeRelation = $typeRelation;

        return $this;
    }

    /**
     * Get typeRelation
     *
     * @return string
     */
    public function getTypeRelation()
    {
        return $this->typeRelation;
    }

    /**
     * Set individuA
     *
     * @param \AdminBundle\Entity\Individu $individuA
     *
     * @return Relation
     */
    public function setIndividuA(\AdminBundle\Entity\Individu $individuA)
    {
        $this->individuA = $individuA;

        return $this;
    }

    /**
     * Get individuA
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividuA()
    {
        return $this->individuA;
    }

    /**
     * Set individuB
     *
     * @param \AdminBundle\Entity\Individu $individuB
     *
     * @return Relation
     */
    public function setIndividuB(\AdminBundle\Entity\Individu $individuB)
    {
        $this->individuB = $individuB;

        return $this;
    }

    /**
     * Get individuB
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividuB()
    {
        return $this->individuB;
    }
}
