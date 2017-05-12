<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gravite
 *
 * @ORM\Table(name="gravite")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\GraviteRepository")
 */
class Gravite
{
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
     * @ORM\Column(name="gravite", type="string", length=255)
     */
    private $gravite_patho;


    
}
