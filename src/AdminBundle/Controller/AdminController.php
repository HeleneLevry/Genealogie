<?php

//src/USerBundle/Controller/UserController.php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use AdminBundle\Entity\Banque_Patho;
use AdminBundle\Form\Banque_PathoType;

class AdminController extends Controller
{	
	public function ajouter_pathoAction()
	{
		$new_patho= new Banque_Patho;
		
		//On genere le formulaire
		 $form=$this->createForm(new Banque_PathoType, $new_patho);
		 
		 //On récupère la requête
		 $request = $this->get('request');

		 //On verifie qu'elle est de type POST
		 
		 if (($this->get('request')->getMethod()) == 'POST'){
			 echo('apres if POST');
			 $form->bind($request);
			 echo('avant if VALID');
			 
			 if ($form->isValid()){
				 echo('apres if VALID');
				 //On enregistre notre objet dans la bdd
				 $em = $this->getDoctrine()->getManager();
				 $em->persist($new_patho);
				 $em->flush();
				 
			return $this->redirect($this->generateUrl('user_connected_index'));
			}
		}
		
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig',array('form' => $form->createView()));
	}
	
	
	public function supprimer_pathoAction()
	{
		return $this->render('AdminBundle:Admin:supprimer_patho.html.twig');
	}
}
