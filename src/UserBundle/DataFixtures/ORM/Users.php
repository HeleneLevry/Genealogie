<?php 

// src/UserBundle/DataFixtures/ORM/Users.php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\Compte;

class Users implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		//Les noms d'utilisateurs a créer
		$noms = array('Maiko', 'John', 'Talus');
		
		foreach($noms as $i => $nom){
			//On crée l'utilisateur
			$users[$i] = new Compte;
			
			//Le nom d'utilisateur est le mot de passe sont identiques pour l'instant
			$users[$i]->setUsername($nom);
			$users[$i]->setPassword($nom);
			$users[$i]->setEmail($nom);
			
			////Le sel et le rôles sont vides pour l'instant
			//$users[$i]->setSalt('');
			//$users[$i]->setRoles(array());
			
			//on le persiste
			$manager->persist($users[$i]);
		}
			
		//On déclenche l'enregistrement
		$manager->flush();
	}
}
