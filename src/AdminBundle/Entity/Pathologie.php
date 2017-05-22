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
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
    */
    private $individu;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Gravite", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $gravite;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Banque_Patho", cascade={"persist", "remove"})
    * @ORM\JoinColumn(name="banque_patho_id", nullable=false, onDelete="CASCADE") //referencedColumnName="nom_pathologie",
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="cause_deces", type="boolean", nullable=true)
     */
    private $causeDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_patho", type="string", length=255, nullable=true)
     */
    private $commentairePatho;



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
     *
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
     *
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
     *
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
     *
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
     * Set commentairePatho
     *
     * @param string $commentairePatho
     *
     * @return Pathologie
     */
    public function setCommentairePatho($commentairePatho)
    {
        $this->commentairePatho = $commentairePatho;

        return $this;
    }

    /**
     * Get commentairePatho
     *
     * @return string
     */
    public function getCommentairePatho()
    {
        return $this->commentairePatho;
    }

    /**
     * Set individu
     *
     * @param \AdminBundle\Entity\Individu $individu
     *
     * @return Pathologie
     */
    public function setIndividu(\AdminBundle\Entity\Individu $individu)
    {
        $this->individu = $individu;

        return $this;
    }

    /**
     * Get individu
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividu()
    {
        return $this->individu;
    }

    /**
     * Set gravite
     *
     * @param \AdminBundle\Entity\Gravite $gravite
     *
     * @return Pathologie
     */
    public function setGravite(\AdminBundle\Entity\Gravite $gravite)
    {
        $this->gravite = $gravite;

        return $this;
    }

    /**
     * Get gravite
     *
     * @return \AdminBundle\Entity\Gravite
     */
    public function getGravite()
    {
        return $this->gravite;
    }

    /**
     * Set banquePatho
     *
     * @param \AdminBundle\Entity\Banque_Patho $banquePatho
     *
     * @return Pathologie
     */
    public function setBanquePatho(\AdminBundle\Entity\Banque_Patho $banquePatho)
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
