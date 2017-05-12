<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Individu
 *
 * @ORM\Table(name="individu")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\IndividuRepository")
 */
class Individu
{    
		
	/**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Compte", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $compte;
  
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="genre", type="boolean")
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deces", type="datetime")
     */
    private $dateDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


   

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
     *
     * @return Individu
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Individu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Individu
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     *
     * @param boolean $genre
     *
     * @return Individu
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return boolean
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Individu
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set dateDeces
     *
     * @param \DateTime $dateDeces
     *
     * @return Individu
     */
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    /**
     * Get dateDeces
     *
     * @return \DateTime
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Individu
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
     * Set compte
     *
     * @param \AdminBundle\Entity\Compte $compte
     *
     * @return Individu
     */
    public function setCompte(\AdminBundle\Entity\Compte $compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return \AdminBundle\Entity\Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }
}
