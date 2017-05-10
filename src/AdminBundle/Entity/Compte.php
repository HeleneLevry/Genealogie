<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\CompteRepository")
 */
class Compte implements UserInterface
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
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt; //pour encoder le mot de passe

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="string", length=255)
     */
    private $roles; //pour definir des admins

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, unique=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


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
     * Set salt
     *
     * @param string $salt
     * @return Compte
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }
    
    /**
     * Get role
     *
     * @return array 
     */

    public function getRoles()
    {
        return $this->roles;
    }


   /**
     * Set role
     *
     * @param array $roles
     * @return Compte
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
    
    /**
     * Get salt
     *
     * @return string 
     */

    public function getSalt()
    {
        return $this->salt;
    }
    /**
     * Set email
     *
     * @param string $email
     * @return Compte
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Compte
     */
    public function setUsername($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->user;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Compte
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    public function eraseCredentials()
    {
	}

    /**
     * Set user
     *
     * @param string $user
     * @return Compte
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }
}
