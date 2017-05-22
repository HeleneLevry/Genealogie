<?php

//src/USerBundle/Controller/UserController.php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

use AdminBundle\Entity\Banque_Patho;
use AdminBundle\Form\Banque_PathoType;
use AdminBundle\Form\Banque_PathoSupprType;

class AdminController extends Controller
{	
	public function ajouter_pathoAction()
	{
		if (!$this->get('security.context')->isGranted('ROLE_ADMIN')){
			return $this->redirect($this->generateUrl('reserve_admin'));
		}
		
		$new_patho= new Banque_Patho;
		
		//On genere le formulaire
		 $form=$this->createForm(new Banque_PathoType, $new_patho);
		 
		 //On récupère la requête
		 $request = $this->get('request');

		 //On verifie qu'elle est de type POST
		 
		 if (($this->get('request')->getMethod()) == 'POST'){
			 $form->bind($request);
			 
			 if ($form->isValid()){
				 
				 //On enregistre notre objet dans la bdd
				 $em = $this->getDoctrine()->getManager();
				 $repository=$em->getRepository('AdminBundle:Banque_Patho');
				 
				 $patho=$new_patho->getNomPathologie();
				 $pathologie=$repository->findOneBy(array('nomPathologie' => $patho));
				  
				 if ($pathologie){
				 
					return $this->redirect($this->generateUrl('admin_Patho_existente'));
				}
				 $em->persist($new_patho);
				 $em->flush();
			return $this->redirect($this->generateUrl('admin_lister_patho'));
			}
		}
		
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig',array('form' => $form->createView()));
	}
	
	
	public function supprimer_pathoAction()
	{
		if (!$this->get('security.context')->isGranted('ROLE_ADMIN')){
			return $this->redirect($this->generateUrl('reserve_admin'));
		}
		
		$nom_patho= new Banque_Patho;
		
		//On genere le formulaire
		 $form=$this->createForm(new Banque_PathoType, $nom_patho);
		 
		 //On récupère la requête
		 $request = $this->get('request');

		 //On verifie qu'elle est de type POST
		 
		 if (($this->get('request')->getMethod()) == 'POST'){
			 $form->bind($request);
			 
			 if ($form->isValid()){
				
				 $em = $this->getDoctrine()->getManager();
				 $repository=$em->getRepository('AdminBundle:Banque_Patho');
				 
				 $patho=$nom_patho->getNomPathologie();
				 
				 $pathologie=$repository->findOneBy(array('nomPathologie' => $patho));
				 
				 if ($pathologie){
					 
					$em->remove($pathologie);
					$em->flush();
					return $this->redirect($this->generateUrl('admin_lister_patho'));
				}
			return $this->redirect($this->generateUrl('admin_Patho_inconnu'));
			}
		}
		
		return $this->render('AdminBundle:Admin:supprimer_patho.html.twig',array('form' => $form->createView()));
	}
	
	public function suppr_pathoAction(Request $request)
	{
		if (!$this->get('security.context')->isGranted('ROLE_ADMIN')){
			return $this->redirect($this->generateUrl('reserve_admin'));
		}
		$banque_patho = new Banque_Patho();
		$form = $this->get('form.factory')->create(new Banque_PathoSupprType(),$banque_patho);
		echo "Bonjour le monde";
		if ($form->handleRequest($request)->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->remove($banque_patho);
			$em->flush();
			$request->getsession()->getFlashBag()->add('notice','Données bien enregistrées');
			return $this->redirect($this->generateUrl('admin_lister_patho'));
		}
		return $this->render('AdminBundle:Admin:suppr_patho.html.twig', array('form' => $form->createView(),));
	}
	
	public function lister_pathoAction()
	{
		if (!$this->get('security.context')->isGranted('ROLE_ADMIN')){
			return $this->redirect($this->generateUrl('reserve_admin'));
		}
		 $nom_patho= new Banque_Patho;
		
		 $em = $this->getDoctrine()->getManager();
		 $repository=$em->getRepository('AdminBundle:Banque_Patho');
		 
		 $liste_pathologies = $repository->findAll();
		 
		 if($liste_pathologies){
			return $this->render('AdminBundle:Admin:lister_patho.html.twig',array('liste_patho'=>$liste_pathologies));
		}
		return $this->redirect($this->generateUrl('admin_bdd_vide_patho'));
	}
	
	public function patho_existanteAction()
	{
		return $this->render('AdminBundle:Admin:patho_existante.html.twig');
	}
	
	public function patho_inconnuAction()
	{
		return $this->render('AdminBundle:Admin:patho_inconnu.html.twig');
	}
	
	public function bdd_vide_pathoAction()
	{
		return $this->render('AdminBundle:Admin:bdd_vide_patho.html.twig');
	}
	public function ajout_adminAction()
	{
		return $this->render('AdminBundle:Admin:ajout_admin.html.twig');
	}
	
	public function reserve_adminAction()
	{
		return $this->render('AdminBundle:Admin:reserve_admin.html.twig');
	}
}
