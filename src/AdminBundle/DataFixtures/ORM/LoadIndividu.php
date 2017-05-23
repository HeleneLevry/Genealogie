<?php
// src/AdminBundle/DataFixtures/ORM/LoadIndividu.php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\Individu;

class LoadIndividu implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
	$individu = new Individu();
    $individu->setNom('NomIndividuA');
    $individu->setPrenom('PrenomIndividuA');
    $individu->setGenre('Masculin');
    $individu->setDateNaissance(new \DateTime('1991-1-1'));
    $individu->setDateDeces(new \DateTime('2011-1-1'));
    $individu->setCommentaire('ComIndividuA');
    $manager->persist($individu);
    
    $individu = new Individu();
    $individu->setNom('NomIndividuB');
    $individu->setPrenom('PrenomIndividuB');
    $individu->setGenre('Feminin');
    $individu->setDateNaissance(new \DateTime('1992-2-2'));
    $individu->setDateDeces(new \DateTime('2012-2-2'));
    $individu->setCommentaire('ComIndividuB');
    $manager->persist($individu);
    
    $individu = new Individu();
    $individu->setNom('NomIndividuC');
    $individu->setPrenom('PrenomIndividuC');
    $individu->setGenre('Masculin');
    $individu->setDateNaissance(new \DateTime('1993-3-3'));
    $individu->setDateDeces(new \DateTime('2013-3-3'));
    $individu->setCommentaire('ComIndividuC');
    $manager->persist($individu);

	// On déclenche l'enregistrement de toutes les catégories
	$manager->flush();
	}
}
