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
    private $individu1;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $individu2;
    
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
     * Set individu1
     *
     * @param \AdminBundle\Entity\Individu $individu1
     *
     * @return Relation
     */
    public function setIndividu1(\AdminBundle\Entity\Individu $individu1)
    {
        $this->individu1 = $individu1;

        return $this;
    }

    /**
     * Get individu1
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividu1()
    {
        return $this->individu1;
    }

    /**
     * Set individu2
     *
     * @param \AdminBundle\Entity\Individu $individu2
     *
     * @return Relation
     */
    public function setIndividu2(\AdminBundle\Entity\Individu $individu2)
    {
        $this->individu2 = $individu2;

        return $this;
    }

    /**
     * Get individu2
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividu2()
    {
        return $this->individu2;
    }
}
