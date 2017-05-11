<?php
// src/AdminBundle/DataFixtures/ORM/LoadRelation.php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\Relation;

class LoadRelation implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $typeRelations = array(
      'Père',
      'Mère',
      'Fils',
      'Fille'
    );

    foreach ($typeRelations as $typeRelation) {
      // On crée la mrelation
      $relation = new Relation();
      $relation->setTypeRelation($typeRelation);

      // On la persiste
      $manager->persist($relation);
    }

    // On déclenche l'enregistrement de toutes les relations
    $manager->flush();
  }
}
