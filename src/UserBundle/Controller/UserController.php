<?php

//src/USerBundle/Controller/UserController.php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{	
	public function indexAction(){
		return $this->render('UserBundle:User:index.html.twig');
	}

	public function accueilAction(){
		return $this->render('UserBundle:User:accueil.html.twig');
	}	
	
	public function menuAction()//transmis via le render() depuis la vue /app
	{		
		return $this->render('UserBundle:User:menu.html.twig');
	}
	
	public function ajouterAction()
	{
		return $this->render('UserBundle:User:ajouter.html.twig');
	}
	
	public function modifierAction()
	{
		return $this->render('UserBundle:User:modifier.html.twig');
	}
	
	public function supprimerAction()
	{
		return $this->render('UserBundle:User:supprimer.html.twig');
	}
}
