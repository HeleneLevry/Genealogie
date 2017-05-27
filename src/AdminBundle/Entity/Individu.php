<?php
// src/AdminBundle/Entity/Individu.php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Individu
 * @ORM\Table(name="individu")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\IndividuRepository")
 */
class Individu
{    
       
   /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Compte", cascade={"persist"}) //orphanRemoval=true
    * @ORM\JoinColumn(name="compte_id", referencedColumnName="id",nullable=false, onDelete="CASCADE")
    */
    private $compte;
  
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     * @Assert\Length(max=255)
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\Length(max=255)
     */
    private $prenom;
   
    /**
     * @var string
     * @ORM\Column(name="genre", type="string", length=255, nullable=true)
     */
    private $genre;

    /**
     * @var string
     * @ORM\Column(name="relation_type", type="string", length=255, nullable=true)
     */
    private $relationType;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_deces", type="date", nullable=true)
     */
    private $dateDeces;

    /**
     * @var string
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;
   
   
   public function __construct()
   {
       $this->date = new \Datetime();
   }
   
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     * @param string $nom
     * @return Individu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get nom
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     * @param string $prenom
     * @return Individu
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get prenom
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     * @param boolean $genre
     * @return Individu
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Get genre
     * @return boolean
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateNaissance
     * @param \DateTime $dateNaissance
     * @return Individu
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Get dateNaissance
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set dateDeces
     * @param \DateTime $dateDeces
     * @return Individu
     */
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;
        return $this;
    }

    /**
     * Get dateDeces
     * @return \DateTime
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Set commentaire
     * @param string $commentaire
     * @return Individu
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Get commentaire
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set compte
     * @param \AdminBundle\Entity\Compte $compte
     * @return Individu
     */
    //public function setCompte(\AdminBundle\Entity\Compte $compte)
    public function setCompte($compte)
    {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Get compte
     * @return \AdminBundle\Entity\Compte
     */
    public function getCompte()
    {
        return $this->compte;
    }
    
    /**
     * Get nom complet
     * @return string
     */
    public function getNomComplet()
    {
        return $this->prenom." ".strtoupper($this->nom);
    }
    
    public function __toString() 
    {
        return $this->compte;
    }
    

    /**
     * Set relationType
     *
     * @param string $relationType
     *
     * @return Individu
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Get relationType
     *
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Get relationType
     *
     * @return string
     */
    public function getRelations()
    {
        // return $this->relationType;
        if ($this->relationType == '.')
        {
            return 'Moi-même';
        }
        if ($this->relationType == '1')
        {
            return 'Petit-fils';
        }
        if ($this->relationType == '2')
        {
            return 'Petite-fille';
        }
        if ($this->relationType == '3')
        {
            return 'Fils';
        }
        if ($this->relationType == '4')
        {
            return 'Fille';
        }
        if ($this->relationType == '5')
        {
            return 'Frère';
        }
        if ($this->relationType === '6')
        {
            return 'Soeur';
        }
        if ($this->relationType == '7')
        {
            return 'Père';
        }
        if ($this->relationType == '8')
        {
            return 'Mère';
        }
        if ($this->relationType == '9')
        {
            return 'Grand-père';
        }
        if ($this->relationType == '10')
        {
            return 'Grand-mère';
        }
        if ($this->relationType == '11')
        {
            return 'Arrière-grand-père';
        }
        if ($this->relationType == '12')
        {
            return 'Arrière-grand-mère';
        }
        if ($this->relationType == '13')
        {
            return 'Oncle';
        }
        if ($this->relationType == '14')
        {
            return 'Tante';
        }
        if ($this->relationType == '15')
        {
            return 'Beau-frère';
        }
        if ($this->relationType == '16')
        {
            return 'Belle-soeur';
        }if ($this->relationType == '17')
        {
            return 'Cousin';
        }if ($this->relationType == '18')
        {
            return 'Cousine';
        }if ($this->relationType == '19')
        {
            return 'Autre';
        }else
        {
            return 'Autre';
        }
    }
}
