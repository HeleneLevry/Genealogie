<<<<<<< HEAD
=======
// src/AdminBundle/Entity/Pathologie.php

>>>>>>> master
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
<<<<<<< HEAD
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
=======
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
     * @ORM\JoinColumn(name="banque_patho_id", nullable=false, onDelete="CASCADE") 
       //referencedColumnName="nom_pathologie",
     */
    private $banque_patho;
   
    /**
     * @var int
>>>>>>> master
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
<<<<<<< HEAD
     * @var int
     *
     * @ORM\Column(name="num_pathologie", type="integer", unique=true)
     */
    private $numPathologie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
=======
     * @var \DateTime
     * @ORM\Column(name="date_debut", type="date", nullable=true)
>>>>>>> master
     */
    private $dateDebut;

    /**
     * @var \DateTime
<<<<<<< HEAD
     *
     * @ORM\Column(name="date_fin", type="datetime")
=======
     * @ORM\Column(name="date_fin", type="date", nullable=true)
>>>>>>> master
     */
    private $dateFin;

    /**
     * @var bool
<<<<<<< HEAD
     *
     * @ORM\Column(name="cause_deces", type="boolean")
=======
     * @ORM\Column(name="cause_deces", type="boolean", nullable=true)
>>>>>>> master
     */
    private $causeDeces;

    /**
     * @var string
<<<<<<< HEAD
     *
     * @ORM\Column(name="commentaire_patho", type="string", length=255)
=======
     * @ORM\Column(name="commentaire_patho", type="string", length=255, nullable=true)
>>>>>>> master
     */
    private $commentairePatho;



    /**
     * Get id
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numPathologie
<<<<<<< HEAD
     *
     * @param integer $numPathologie
     *
=======
     * @param integer $numPathologie
>>>>>>> master
     * @return Pathologie
     */
    public function setNumPathologie($numPathologie)
    {
        $this->numPathologie = $numPathologie;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get numPathologie
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return integer
     */
    public function getNumPathologie()
    {
        return $this->numPathologie;
    }

    /**
     * Set dateDebut
<<<<<<< HEAD
     *
     * @param \DateTime $dateDebut
     *
=======
     * @param \DateTime $dateDebut
>>>>>>> master
     * @return Pathologie
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get dateDebut
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
<<<<<<< HEAD
     *
     * @param \DateTime $dateFin
     *
=======
     * @param \DateTime $dateFin
>>>>>>> master
     * @return Pathologie
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
<<<<<<< HEAD

        return $this;
    }

    /**
     * Get dateFin
     *
=======
        return $this;
    }

   /**
     * Get dateFin
>>>>>>> master
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set causeDeces
<<<<<<< HEAD
     *
     * @param boolean $causeDeces
     *
=======
     * @param boolean $causeDeces
>>>>>>> master
     * @return Pathologie
     */
    public function setCauseDeces($causeDeces)
    {
        $this->causeDeces = $causeDeces;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get causeDeces
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return boolean
     */
    public function getCauseDeces()
    {
        return $this->causeDeces;
    }

    /**
     * Set commentairePatho
<<<<<<< HEAD
     *
     * @param string $commentairePatho
     *
=======
     * @param string $commentairePatho
>>>>>>> master
     * @return Pathologie
     */
    public function setCommentairePatho($commentairePatho)
    {
        $this->commentairePatho = $commentairePatho;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get commentairePatho
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return string
     */
    public function getCommentairePatho()
    {
        return $this->commentairePatho;
    }

    /**
     * Set individu
<<<<<<< HEAD
     *
     * @param \AdminBundle\Entity\Individu $individu
     *
=======
     * @param \AdminBundle\Entity\Individu $individu
>>>>>>> master
     * @return Pathologie
     */
    public function setIndividu(\AdminBundle\Entity\Individu $individu)
    {
        $this->individu = $individu;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get individu
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividu()
    {
        return $this->individu;
    }

    /**
     * Set gravite
<<<<<<< HEAD
     *
     * @param \AdminBundle\Entity\Gravite $gravite
     *
=======
     * @param \AdminBundle\Entity\Gravite $gravite
>>>>>>> master
     * @return Pathologie
     */
    public function setGravite(\AdminBundle\Entity\Gravite $gravite)
    {
        $this->gravite = $gravite;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get gravite
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \AdminBundle\Entity\Gravite
     */
    public function getGravite()
    {
        return $this->gravite;
    }

    /**
     * Set banquePatho
<<<<<<< HEAD
     *
     * @param \AdminBundle\Entity\Banque_Patho $banquePatho
     *
=======
     * @param \AdminBundle\Entity\Banque_Patho $banquePatho
>>>>>>> master
     * @return Pathologie
     */
    public function setBanquePatho(\AdminBundle\Entity\Banque_Patho $banquePatho)
    {
        $this->banque_patho = $banquePatho;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get banquePatho
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \AdminBundle\Entity\Banque_Patho
     */
    public function getBanquePatho()
    {
        return $this->banque_patho;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> master
