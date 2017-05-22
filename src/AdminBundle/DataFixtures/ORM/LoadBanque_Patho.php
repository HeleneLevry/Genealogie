<?php
// src/AdminBundle/DataFixtures/ORM/LoadBanque_Patho.php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\Banque_Patho;

class LoadBanque_Patho implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    
    $nomPathologies = array(
      'Amyotrophie spinale',
      'Dystrophie musculaire',
      'Microlissencéphalie',
      'Sclérose latérale primitive',
      'Myopathie distale de Udd'
    );
	foreach ($nomPathologies as $nomPathologie) {
		$banque_patho = new Banque_Patho();
		$banque_patho->setNomPathologie($nomPathologie);
		$manager->persist($banque_patho);
	}

	// On déclenche l'enregistrement de toutes les catégories
	$manager->flush();
	}
}
