<?php

//src/USerBundle/Controller/UserController.php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{	
	public function ajouter_pathoAction()
	{
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig');
	}
}
