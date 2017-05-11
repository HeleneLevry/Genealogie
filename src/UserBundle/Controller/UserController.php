<?php

//src/USerBundle/Controller/UserController.php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
	public function accueilAction(){
		
		//return new Response("Accueil");
		return $this->render('UserBundle:User:accueil.html.twig');
	}	
}
