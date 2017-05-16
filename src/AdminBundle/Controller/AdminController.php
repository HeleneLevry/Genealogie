<?php

//src/USerBundle/Controller/UserController.php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Compte;

class AdminController extends Controller
{	
	public function ajouter_pathoAction()
	{
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig');
	}
	
	public function ajouter_adminAction()
	{
		//recuperation du compte actif
		$compte= $this->container->get('security.context')->getToken()->getUser();
		
		//on crée le FormBuilder
		$formBuilder = $this->createFormBuilder($compte);
		
		//on ajoute les champs de l'entité que l'on veut a notre formulaire
		$formBuilder
		 ->add('Username',     'text')
		 ->add('Roles',        'collection');
		 
		 //On genere le formulaire
		 $form=$formBuilder->getForm();
		 
		 //On récupère la requête
		 $request = $this-> get('request');
		 
		 //On verifie qu'elle est de type POST
		 if ($request->getMethod() == 'POST'){
			 $form->bind($request);
			 
			 if ($form->isValid()){
				 //On enregistre notre objet dans la bdd
				 $em = $this->getDoctrine()->getManager();
				 $em->persist($article);
				 $em->flush();
				 
			}
		}
		 
		 //affichage du formulaire
		return $this->render('AdminBundle:Admin:ajouter_admin.html.twig',array('form' => $form->createView(),));
	}
}
