<<<<<<< HEAD
=======
// src/AdminBundle/Entity/Individu.php

>>>>>>> master
<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD

/**
 * Individu
 *
=======
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Individu
>>>>>>> master
 * @ORM\Table(name="individu")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\IndividuRepository")
 */
class Individu
{    
<<<<<<< HEAD
		
	/**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Compte", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
=======
       
   /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Compte", cascade={"persist", "remove"}) //orphanRemoval=true
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id",nullable=true, onDelete="CASCADE")
>>>>>>> master
    */
    private $compte;
  
    /**
     * @var int
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
<<<<<<< HEAD
     *
     * @ORM\Column(name="nom", type="string", length=255)
=======
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     * @Assert\Length(max=255)
>>>>>>> master
     */
    private $nom;

    /**
     * @var string
<<<<<<< HEAD
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="genre", type="boolean")
=======
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\Length(max=255)
     */
    private $prenom;
   
    /**
     * @var string
     * @ORM\Column(name="genre", type="string", length=255, nullable=true)
>>>>>>> master
     */
    private $genre;

    /**
     * @var \DateTime
<<<<<<< HEAD
     *
     * @ORM\Column(name="date_naissance", type="datetime")
=======
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
>>>>>>> master
     */
    private $dateNaissance;

    /**
     * @var \DateTime
<<<<<<< HEAD
     *
     * @ORM\Column(name="date_deces", type="datetime")
=======
     * @ORM\Column(name="date_deces", type="date", nullable=true)
>>>>>>> master
     */
    private $dateDeces;

    /**
     * @var string
<<<<<<< HEAD
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


   
	
	public function __construct()
	{
		$this->date = new \Datetime();
	}
	
    /**
     * Get id
     *
=======
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;
   
   
   public function __construct()
   {
       $this->date = new \Datetime();
   }
   
    /**
     * Get id
>>>>>>> master
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
<<<<<<< HEAD
     *
     * @param string $nom
     *
=======
     * @param string $nom
>>>>>>> master
     * @return Individu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get nom
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
<<<<<<< HEAD
     *
     * @param string $prenom
     *
=======
     * @param string $prenom
>>>>>>> master
     * @return Individu
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get prenom
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
<<<<<<< HEAD
     *
     * @param boolean $genre
     *
=======
     * @param boolean $genre
>>>>>>> master
     * @return Individu
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get genre
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return boolean
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateNaissance
<<<<<<< HEAD
     *
     * @param \DateTime $dateNaissance
     *
=======
     * @param \DateTime $dateNaissance
>>>>>>> master
     * @return Individu
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get dateNaissance
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set dateDeces
<<<<<<< HEAD
     *
     * @param \DateTime $dateDeces
     *
=======
     * @param \DateTime $dateDeces
>>>>>>> master
     * @return Individu
     */
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get dateDeces
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \DateTime
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Set commentaire
<<<<<<< HEAD
     *
     * @param string $commentaire
     *
=======
     * @param string $commentaire
>>>>>>> master
     * @return Individu
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
<<<<<<< HEAD

=======
>>>>>>> master
        return $this;
    }

    /**
     * Get commentaire
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set compte
<<<<<<< HEAD
     *
     * @param \AdminBundle\Entity\Compte $compte
     *
     * @return Individu
     */
    public function setCompte(\AdminBundle\Entity\Compte $compte)
    {
        $this->compte = $compte;

=======
     * @param \AdminBundle\Entity\Compte $compte
     * @return Individu
     */
    //public function setCompte(\AdminBundle\Entity\Compte $compte)
    public function setCompte($compte)
    {
        $this->compte = $compte;
>>>>>>> master
        return $this;
    }

    /**
     * Get compte
<<<<<<< HEAD
     *
=======
>>>>>>> master
     * @return \AdminBundle\Entity\Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }
<<<<<<< HEAD
}
=======
    
    /**
     * Get nom complet
     * @return string
     */
    public function getNomComplet()
    {
        return $this->prenom." ".$this->nom;
    }
    
}
>>>>>>> master
