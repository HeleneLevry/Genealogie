<<<<<<< HEAD
=======
// src/AdminBundle/Entity/Banque_Patho.php

>>>>>>> master
<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque_Patho
<<<<<<< HEAD
 *
=======
>>>>>>> master
 * @ORM\Table(name="banque__patho")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Banque_PathoRepository")
 */
class Banque_Patho
{
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
     * @ORM\Column(name="nom_pathologie", type="string", length=255, unique=true)
     */
    private $nomPathologie;
    
    
}
=======
     * @ORM\Column(name="nom_pathologie", type="string", length=255, unique=true)
     */
    private $nomPathologie;

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPathologie
     * @param string $nomPathologie
     * @return Banque_Patho
     */
    public function setNomPathologie($nomPathologie)
    {
        $this->nomPathologie = $nomPathologie;
        return $this;
    }

    /**
     * Get nomPathologie
     * @return string
     */
    public function getNomPathologie()
    {
        return $this->nomPathologie;
    }
    
    public function __toString() 
    {
        return $this->nomPathologie;
    }
}
>>>>>>> master
