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
				 
			return $this->redirect($this->generateUrl('admin_lister_patho'));
			}
		}
		
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig',array('form' => $form->createView()));
	}
	
	
	public function supprimer_pathoAction()
	{
		$nom_patho= new Banque_Patho;
		
		//On genere le formulaire
		 $form=$this->createForm(new Banque_PathoType, $nom_patho);
		 
		 //On récupère la requête
		 $request = $this->get('request');

		 //On verifie qu'elle est de type POST
		 
		 if (($this->get('request')->getMethod()) == 'POST'){
			 $form->bind($request);
			 
			 if ($form->isValid()){
				
				 //On enregistre notre objet dans la bdd
				 $em = $this->getDoctrine()->getManager();
				 $repository=$em->getRepository('AdminBundle:Banque_Patho');
				 
				 $patho=$nom_patho->getNomPathologie();
				 
				 $pathologie=$repository->findOneBy(array('nomPathologie' => $patho));
				 
				 if ($pathologie){
					 
					$em->remove($pathologie);
					$em->flush();
					
				}
			return $this->redirect($this->generateUrl('admin_lister_patho'));
			}
		}
		
		return $this->render('AdminBundle:Admin:supprimer_patho.html.twig',array('form' => $form->createView()));
	}
	
	public function lister_pathoAction()
	{
		 $nom_patho= new Banque_Patho;
		
		 $em = $this->getDoctrine()->getManager();
		 $repository=$em->getRepository('AdminBundle:Banque_Patho');
		 
		 $liste_pathologies = $repository->findAll();
				 
		return $this->render('AdminBundle:Admin:lister_patho.html.twig',array('liste_patho'=>$liste_pathologies));
	}
}
