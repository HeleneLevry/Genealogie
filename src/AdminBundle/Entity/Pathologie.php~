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
	// Liaison OneToOne avec la Banque_Patho 
	/**
	* @ORM\OneToOne(targetEntity="AdminBundle\Entity\Banque_Patho", cascade={"persist"})
	*/
    private $banque_patho;
    
    //// Liaison ManyToZero avec la Banque_Patho 
	///**
	//* @ORM\OneToOne(targetEntity="AdminBundle\Entity\Banque_Patho", cascade={"persist"})
	//* @ORM\JoinColumn(nullable=false)
	//*/
    //private $banque_patho;
	
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
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="num_individu", type="integer")
     */
    private $numIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="gravite", type="string", length=255)
     */
    private $gravite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pathologie", type="string", length=255, unique=true)
     */
    private $nomPathologie;


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
     * Set numPathologie
     *
     * @param integer $numPathologie
     * @return Pathologie
     */
    public function setNumPathologie($numPathologie)
    {
        $this->numPathologie = $numPathologie;

        return $this;
    }

    /**
     * Get numPathologie
     *
     * @return integer 
     */
    public function getNumPathologie()
    {
        return $this->numPathologie;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Pathologie
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Pathologie
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set causeDeces
     *
     * @param boolean $causeDeces
     * @return Pathologie
     */
    public function setCauseDeces($causeDeces)
    {
        $this->causeDeces = $causeDeces;

        return $this;
    }

    /**
     * Get causeDeces
     *
     * @return boolean 
     */
    public function getCauseDeces()
    {
        return $this->causeDeces;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Pathologie
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set numIndividu
     *
     * @param integer $numIndividu
     * @return Pathologie
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
     * Set gravite
     *
     * @param string $gravite
     * @return Pathologie
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

    /**
     * Set nomPathologie
     *
     * @param string $nomPathologie
     * @return Pathologie
     */
    public function setNomPathologie($nomPathologie)
    {
        $this->nomPathologie = $nomPathologie;

        return $this;
    }

    /**
     * Get nomPathologie
     *
     * @return string 
     */
    public function getNomPathologie()
    {
        return $this->nomPathologie;
    }

    /**
     * Set banquePatho
     *
     * @param \AdminBundle\Entity\Banque_Patho $banquePatho
     *
     * @return Pathologie
     */
    public function setBanquePatho(\AdminBundle\Entity\Banque_Patho $banquePatho = null)
    {
        $this->banque_patho = $banquePatho;

        return $this;
    }

    /**
     * Get banquePatho
     *
     * @return \AdminBundle\Entity\Banque_Patho
     */
    public function getBanquePatho()
    {
        return $this->banque_patho;
    }
}
