<?php

//src/USerBundle/Controller/UserController.php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Banque_Patho;

class AdminController extends Controller
{	
	public function ajouter_pathoAction()
	{
		$new_patho= new Banque_Patho();
		
		$formBuilder= $this->createFormBuilder($new_patho);
		
		$formBuilder
			->add ('nomPathologie', 'text');
			
		//On genere le formulaire
		 $form=$formBuilder->getForm();
		 
		 //On récupère la requête
		 $request = $this->get('request');
		 
		 //On verifie qu'elle est de type POST
		 if ($request->getMethod() == 'POST'){
			 $form->bind($request);
			 
			// if ($form->isValid()){
				 
				 //On enregistre notre objet dans la bdd
				 $em = $this->getDoctrine()->getManager();
				 $em->persist($new_patho);
				 $em->flush();
				 
			return $this->redirect($this->generateUrl('user_connected_index'));
			//}
		}
		
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig',array('form' => $form->createView(),));
	}
	
	
	public function supprimer_pathoAction()
	{
		return $this->render('AdminBundle:Admin:supprimer_patho.html.twig');
	}
}
