<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pathologie
 *
 * @ORM\Table(name="pathologie")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PathologieRepository")
 */
class Pathologie
{
	/**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $individu;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Gravite", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $gravite;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Banque_Patho", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $banque_patho;
	
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
     * @ORM\Column(name="num_pathologie", type="integer", unique=true)
     */
    private $numPathologie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="cause_deces", type="boolean")
     */
    private $causeDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_patho", type="string", length=255)
     */
    private $commentairePatho;


}
