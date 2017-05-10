<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\Compte;

class LoadCategory implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $roles = array(
      'Admin',
      'Editeur',
      'Utilisateur'
    );

    foreach ($roles as $role) {
      // On crée la catégorie
      $compte = new Compte();
      $compte->setRoles($role);

      // On la persiste
      $manager->persist($compte);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}
