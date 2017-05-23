<?php
// src/AdminBundle/DataFixtures/ORM/LoadGravite.php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\Gravite;

class LoadGravite implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $gravite_pathos = array(
      '1',
      '2',
      '3',
      '4',
      '5',
      '6',
      '7',
      '8',
      '9',
      '10'
    );
	foreach ($gravite_pathos as $gravite_patho) {
		$gravite = new Gravite();
		$gravite->setGravitePatho($gravite_patho);
		$manager->persist($gravite);
	}
	// On déclenche l'enregistrement de toutes les catégories
	$manager->flush();
	}
}
