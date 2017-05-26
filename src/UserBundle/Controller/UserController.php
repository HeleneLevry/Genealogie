<?php
// src/UserBundle/Controller/UserController.php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AdminBundle\Entity\Compte;
use AdminBundle\Entity\Individu;
use AdminBundle\Entity\Relation;
use AdminBundle\Entity\Pathologie;
use AdminBundle\Entity\Gravite;
use AdminBundle\Entity\Banque_Patho;

use AdminBundle\Form\IndividuType;
use AdminBundle\Form\IndividuEType;
use AdminBundle\Form\RelationType;
use AdminBundle\Form\RelationEType;
use AdminBundle\Form\PathologieEmbType;


class UserController extends Controller
{

//----------------------------------------------------------------------
	public function menuAction(){//transmis via le render() depuis la vue /app		
		return $this->render('UserBundle:User:menu.html.twig');
	}

//----------------------------------------------------------------------
	public function accueilAction(){
		return $this->render('UserBundle:User:accueil.html.twig');
	}

//----------------------------------------------------------------------	
	public function indexAction(){
		return $this->render('UserBundle:User:index.html.twig');
	}

//----------------------------------------------------------------------
	public function mon_compteAction(){		
		return $this->render('UserBundle:User:mon_compte.html.twig');
	}

////////////////////////////////////////////////////////////////////////
	public function mes_infosAction(Request $request){
		//$individu = new Individu();
		//$indiv_moi = new Individu();
		// test individus compte
		$user = $this->container->get('security.context')->getToken()->getUser();
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$listeIndividus = $repository->findBy(array('compte' => $user));
		// si individus sur le compte, recherche indiv_moi
		if($listeIndividus){
			foreach ($listeIndividus as $listeIndividu) {
				$repository = $this
					->getDoctrine()
					->getManager()
					->getRepository('AdminBundle:Relation')
				;
				$indiv_moi = $repository->findOneBy(array('individuALier' => $listeIndividus, 'typeRelation' => null));
			}
			// si indiv_moi, chargement entité
			if($indiv_moi){
				$form = $this->createForm('AdminBundle\Form\IndividuType', $indiv_moi);
				if ($form->handleRequest($request)->isValid()){
					$em = $this->getDoctrine()->getManager();
					$em->persist($indiv_moi);
					$em->flush();
					return $this->redirect($this->generateUrl('user_liste_proches'));
				}
				return $this->render('UserBundle:User:mes_infos.html.twig', array('form' => $form->createView()));
			}
		}
		// si pas d'individus sur le compte, création individu
			$individu = new Individu();
			$rel_moi = new Relation();
			$form = $this->createForm('AdminBundle\Form\IndividuType', $individu);
			$user = $this->get('security.context')->getToken()->getUser();
			if ($form->handleRequest($request)->isValid()){
				$individu->setCompte($user);
				$rel_moi->setIndividuConnu($individu);
				$rel_moi->setTypeRelation(null);
				$rel_moi->setIndividuALier($individu);
				$em = $this->getDoctrine()->getManager();
				$em->persist($individu);
				$em->persist($rel_moi);
				$em->flush();
				return $this->redirect($this->generateUrl('user_liste_proches'));
			}
			return $this->render('UserBundle:User:mes_infos.html.twig', array('form' => $form->createView()));
		
	}
	
////////////////////////////////////////////////////////////////////////
	public function mes_pathoAction()
	{
		// requete individu_moi dont TypeRelation null
		// requete pathologies_moi avec numéro individu_moi
		return $this->render('UserBundle:User:mes_patho.html.twig');
	}

/////////////-----------------------------------------------------------
	public function ajout_procheAction(Request $request){
		$individu = new Individu();
		$form = $this->createForm('AdminBundle\Form\IndividuType', $individu);
		$user = $this->get('security.context')->getToken()->getUser();
		if ($form->handleRequest($request)->isValid()){
			$individu->setCompte($user);
			$em = $this->getDoctrine()->getManager();
			$em->persist($individu);
			$em->flush();
			return $this->redirect($this->generateUrl('user_liste_proches'));
		}		
		return $this->render('UserBundle:User:ajout_proche.html.twig', array('form' => $form->createView()));
	}
	// public function ajout_procheAction(Request $request)
	// {
	// 	$relation = new Relation();
	// 	$individu = new Individu();
	// 	$user = $this->get('security.context')->getToken()->getUser();
	// 	$form = $this->createForm('AdminBundle\Form\RelationEType', $relation, array('compte' => $user));
	// 	if ($form->handleRequest($request)->isValid()){
	// 		//$individu->setCompte($user);
	// 		$em = $this->getDoctrine()->getManager();
	// 		$em->persist($relation);
	// 		$em->flush();
	// 		//$request->getsession()->getFlashBag()->add('notice','Données bien enregistrées');
	// 		return $this->redirect($this->generateUrl('user_liste_proches'));
	// 	}		
	// 	return $this->render('UserBundle:User:ajout_proche.html.twig', array('form' => $form->createView(),));
	// }	

//----------------------------------------------------------------------	
	public function liste_prochesAction(){
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$user = $this->container->get('security.context')->getToken()->getUser();
		$listIndividus = $repository->findBy(array('compte' => $user), array('dateNaissance' => 'desc'));
		if($listIndividus){
			return $this->render('UserBundle:User:liste_proches.html.twig', array('liste_indiv'=>$listIndividus));
		}
		return $this->redirect($this->generateUrl('user_liste_proches_vide'));
	}
//----------------------------------------------------------------------	
	public function liste_proches_videAction(){
		return $this->render('UserBundle:User:liste_proches_vide.html.twig');
	}

//----------------------------------------------------------------------	
	public function infos_procheAction($id_indiv){

		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		if($individu){
			return $this->render(
				'UserBundle:User:infos_proche.html.twig', 
				array('individu' => $individu)
			);
		}
		return $this->redirect($this->generateUrl('user_liste_proches'));
	}

//----------------------------------------------------------------------	
	public function modif_procheAction($id_indiv, Request $request){
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		if($individu){
			$form = $this->createForm('AdminBundle\Form\IndividuType', $individu);
			$user = $this->get('security.context')->getToken()->getUser();
			if ($form->handleRequest($request)->isValid()){
				$individu->setCompte($user);
				$em = $this->getDoctrine()->getManager();
				$em->persist($individu);
				$em->flush();
				return $this->render('UserBundle:User:infos_proche.html.twig', array('id_indiv' => $id_indiv, 'individu' => $individu));
			}		
			return $this->render('UserBundle:User:modif_proche.html.twig', array('id_indiv' => $id_indiv, 'form' => $form->createView()));
		}
		return $this->render(
			'UserBundle:User:modif_proche.html.twig',
			array('id_indiv' => $id_indiv)
			);
	}

//----------------------------------------------------------------------	
	public function liste_patho_procheAction($id_indiv){
		// Trouver l'individu concerné
		$repository = $this ->getDoctrine()
							->getManager()
							->getRepository('AdminBundle:Individu');
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		// Si l'individu est trouvé
		if($individu){
			// Trouver les pathologies associées à l'individu
			$repository = $this ->getDoctrine()
								->getManager()
								->getRepository('AdminBundle:Pathologie');
			$listePathologies = $repository->findBy(array('individu' => $id_indiv), array('dateDebut' => 'desc', 'dateFin' => 'desc'));
			// Si il y a des pathologies 
			if ($listePathologies)
			{
				// Affichage vue liste_patho_proche avec individu et listePathologies
				return $this->render(
					'UserBundle:User:liste_patho_proche.html.twig', 
					array('individu'=>$individu, 'id_indiv' => $id_indiv, 'listePathologies' => $listePathologies)
			 	);
			}
			// Si pas de pathologies, envoi vers liste_patho_proche_vide avec id_indiv
			return $this->redirect($this->generateUrl('user_liste_patho_proche_vide', array('id_indiv'=>$id_indiv)));
		}
		// Si pas individu, retour à liste des proches
		return $this->redirect($this->generateUrl('user_liste_proches'));
	}
//----------------------------------------------------------------------	
	public function liste_patho_proche_videAction($id_indiv){
		// Trouver l'individu concerné
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu');
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		// Si l'individu est trouvé
		if($individu){
			// Afficher vue liste_patho_proche_vide avec individu et id_indiv (pour passer au bouton ajout_patho)
			return $this->render(
				'UserBundle:User:liste_patho_proche_vide.html.twig',
				array('id_indiv' => $id_indiv, 'individu' => $individu)
			);
		}
		// Si pas individu, retour à la liste des proches
		return $this->redirect($this->generateUrl('user_liste_proches'));
	}

//----------------------------------------------------------------------	
	public function ajout_patho_procheAction($id_indiv, Request $request){
		// Trouver l'individu concerné
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu');
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		// Si l'individu est trouvé
		if($individu){
			// Créer une nouvelle instance de pathologie
			$pathologie = new Pathologie();
			// Faire appel au formulaire d'ajout
			$form = $this->createForm('AdminBundle\Form\PathologieType', $pathologie);
			if ($form->handleRequest($request)->isValid()){
				$em = $this->getDoctrine()->getManager();
				$pathologie->setIndividu($individu);
				$em->persist($pathologie);
				$em->flush();
				// Afficher la liste des pathologies du proche
				return $this->redirect(
					$this->generateUrl(
						'user_liste_patho_proche', 
						array('id_indiv'=>$id_indiv)
						)
					);
			}
			// retourner la vue avec formulaire, l'instance pathologie, le id_indiv et l'individu concerné
			return $this->render(
				'UserBundle:User:ajout_patho_proche.html.twig', 
				array(
					'id_indiv' => $id_indiv, 
					'individu' => $individu, 
					'pathologie' => $pathologie, 
					'form' => $form->createView()
				)
			);
		}
		// Si pas individu, retour à la liste des proches
		return $this->redirect($this->generateUrl('user_liste_proches'));
	}
	
////////////////////////////////////////////////////////////////////////	
	public function modif_patho_procheAction($id_indiv, $id_patho, Request $request){
		// Trouver l'individu concerné
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu');
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		// Créer une nouvelle instance de pathologie
		$pathologie = new Pathologie();
		// Trouver la pathologie concernée
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Pathologie');
		$pathologie = $repository->findOneBy(array('id' => $id_patho));
		// Si la pathologie est trouvée
		if($pathologie and $individu){
			// Faire appel au formulaire d'ajout
			$form = $this->createForm('AdminBundle\Form\PathologieType', $pathologie);
			if ($form->handleRequest($request)->isValid()){
				$em = $this->getDoctrine()->getManager();
				$pathologie->setIndividu($individu);
				$em->persist($pathologie);
				$em->flush();
				// Afficher la liste des pathologies du proche
				return $this->redirect(
					$this->generateUrl(
						'user_liste_patho_proche', 
						array('id_indiv'=>$id_indiv)
						)
					);
			}
			// retourner la vue avec formulaire, l'instance pathologie, le id_indiv et l'individu concerné
			return $this->render(
				'UserBundle:User:modif_patho_proche.html.twig', 
				array(
					'id_indiv' => $id_indiv,
					'id_patho' => $id_patho,
					'individu' => $individu, 
					'pathologie' => $pathologie, 
					'form' => $form->createView()
				)
			);
		}
		// Si pas pathologie, retour à la liste des pathologies du proche
		return $this->redirect(
			$this->generateUrl(
				'user_liste_patho_proche', 
				array('id_indiv'=>$id_indiv)
			)
		);
	}

////////////////////////////////////////////////////////////////////////	
	public function suppr_patho_procheAction($id_indiv, $id_patho, Request $request){
		// Trouver l'individu concerné
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu');
		$individu = $repository->findOneBy(array('id' => $id_indiv));
		// Trouver la pathologie concernée
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Pathologie');
		$patho_suppr = $repository->findOneBy(array('id' => $id_patho));
		// Suppression
		$em = $this->getDoctrine()->getManager();
		if (null === $patho_suppr) {
			throw new NotFoundHttpException("La pathologie ".$id_patho."n'existe pas.");
		}
		$form = $this->createFormBuilder()->getForm();
		if ($form->handleRequest($request)->isValid()) {
			$em->remove($patho_suppr);
			$em->flush();
			return $this->redirect($this->generateUrl(
				'user_liste_patho_proche', 
				array('id_indiv'=>$id_indiv)
			));
		}
		return $this->render(
			'UserBundle:User:suppr_patho_proche.html.twig', 
			array(
				'id_indiv' => $id_indiv, 
				'id_patho' => $id_patho,
				'individu' => $individu, 
				'pathologie' => $patho_suppr,
				'form' => $form->createView())
		);
	}

//----------------------------------------------------------------------	
	public function suppr_procheAction($id_indiv, Request $request){
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$indiv_suppr = $repository->findOneBy(array('id' => $id_indiv));
		$em = $this->getDoctrine()->getManager();
		if (null === $indiv_suppr) {
			throw new NotFoundHttpException("Le proche ".$id_indiv."n'existe pas.");
		}
		$form = $this->createFormBuilder()->getForm();
		if ($form->handleRequest($request)->isValid()) {
			$em->remove($indiv_suppr);
			$em->flush();
			return $this->redirect($this->generateUrl('user_liste_proches'));
		}
		return $this->render(
			'UserBundle:User:suppr_proche.html.twig', 
			array('id_indiv' => $id_indiv, 'individu' => $indiv_suppr, 'form' => $form->createView())
		);
	}

////////////////////////////////////////////////////////////////////////	
	public function liste_patho_prochesAction(){
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$user = $this->container->get('security.context')->getToken()->getUser();
		$listeIndividus = $repository->findBy(array('compte' => $user), array('dateNaissance' => 'desc'));
		if($listeIndividus){
			foreach ($listeIndividus as $listeIndividu)
			{
				// $repository = $this ->getDoctrine()
				// 					->getManager()
				// 					->getRepository('AdminBundle:Pathologie');
				// $listePathologies = $repository->findBy(array('individu' => $listeIndividu));
			// }
			// if($listePathologies){
			// 	return $this->return $this->redirect($this->generateUrl('user_liste_proches_vide'));render('UserBundle:User:liste_patho_proches.html.twig', array('liste_patho'=>$listePathologies, 'liste_indiv'=>$listeIndividus));
			}
			return $this->render('UserBundle:User:liste_patho_proches_vide.html.twig');
		}
		else{
			return $this->redirect($this->generateUrl('user_liste_proches_vide'));
		}
		//return $this->redirect($this->generateUrl('user_liste_proches_vide'));
	}

//----------------------------------------------------------------------	
	public function liste_patho_proches_videAction(){
		return $this->render('UserBundle:User:liste_patho_proches_vide.html.twig');
	}

//----------------------------------------------------------------------
	public function nous_contacterAction(){
		return $this->render('UserBundle:User:nous_contacter.html.twig');
	}
	
//----------------------------------------------------------------------
	public function supprimer_compte_1Action()
	{
		return $this->render('UserBundle:User:supprimer_compte_1.html.twig');
	}
	
//----------------------------------------------------------------------
	public function supprimer_compte_2Action()
	{	
		$user = $this->container->get('security.context')->getToken()->getUser();
		$userManager = $this->get('fos_user.user_manager');
		$userManager->deleteUser($user);
		return $this->render('UserBundle:User:supprimer_compte_2.html.twig');
	}
	
	
//////////////////////////////////////////////////////////////////////////
	//public function ajouter_procheAction(Request $request)
	//{
		//$relation = new Relation();
		//$individu = new Individu();
		//$compte = new Compte();
		
		//$repository = $this ->getDoctrine()
							//->getManager()
							//->getRepository('AdminBundle:Compte');
		
		//$user = $this->get('security.context')->getToken()->getUser();
		//$userId = $user->getId();
		//$compte= $repository->findOneBy(array('id' => $userId));
		//$_SESSION['iduser']=$userId;
		//$individu->setCompte($compte);
		////$individu->setCompte($this->getUser()->getId());
		////$individu->setCompte($this->getUser());
		//$form = $this->createForm('AdminBundle\Form\RelationEType', $relation, array('compte' => $user));
		//if ($form->handleRequest($request)->isValid()){
			//$individu->setCompte($user);
			//$em = $this->getDoctrine()->getManager();
			//$em->persist($relation);
			//$em->flush();
			//$request->getsession()->getFlashBag()->add('notice','Données bien enregistrées');
			//return $this->redirect($this->generateUrl('user_connected_index'));
		//}		
		//return $this->render('UserBundle:User:ajouter_proche.html.twig', array('form' => $form->createView(),));
	//}
	
//////////////////////////////////////////////////////////////////////////
	//public function modifier_supprimerAction()
	//{
		//$repository = $this
			//->getDoctrine()
			//->getManager()
			//->getRepository('AdminBundle:Individu')
		//;
		//$listIndividu = $repository->findAll();
		//return $this->render('UserBundle:User:modifier_supprimer.html.twig', array('liste_indiv'=>$listIndividu));
	//}
	
//////////////////////////////////////////////////////////////////////////
	//public function modifier_infos_individuAction()
	//{
		//return $this->render('UserBundle:User:modifier_infos_individu.html.twig');
	//}

//////////////////////////////////////////////////////////////////////////
	//public function supprimer_infos_individuAction()
	//{
		//return $this->render('UserBundle:User:supprimer_infos_individu.html.twig');
	//}
	
//////////////////////////////////////////////////////////////////////////
	//public function choix_patho_modifierAction()
	//{
		//$repository = $this
			//->getDoctrine()
			//->getManager()
			//->getRepository('AdminBundle:Individu')
		//;
		//$id_user = $this->container->get('security.context')->getToken()->getUser()->getId();
		//$listIndividu = $repository->findBy(array('compte' => $id_user), array('dateNaissance' => 'desc'));		
		
		//$repository = $this
			//->getDoctrine()
			//->getManager()
			//->getRepository('AdminBundle:Pathologie')
		//;
		//$listPathologies = $repository->findBy(array('banque_patho' => $listIndividu), array('dateDebut' => 'desc'));
		//return $this->render('UserBundle:User:choix_patho_modifier.html.twig', array('liste_patho'=>$listPathologies));
	//}
	
//////////////////////////////////////////////////////////////////////////
	//public function ajouter_patho_individuAction(Request $request)
	//{
		//$pathologie = new Pathologie();
		//$individu = new Individu();
		//$form = $this->createForm('AdminBundle\Form\PathologieAjoutType', $pathologie);
		//if ($form->handleRequest($request)->isValid()){
			//$em = $this->getDoctrine()->getManager();
			//$em->persist($pathologie);
			//$em->flush();
			//$request->getsession()->getFlashBag()->add('notice','Données bien enregistrées');
			//return $this->redirect($this->generateUrl('user_connected_index'));
		//}
		//return $this->render('UserBundle:User:ajouter_patho_individu.html.twig', array('form' => $form->createView()));
	//}
	
//////////////////////////////////////////////////////////////////////////
	//public function modifier_patho_individuAction()
	//{
		//return $this->render('UserBundle:User:modifier_patho_individu.html.twig');
	//}
//////////////////////////////////////////////////////////////////////////
	//public function supprimer_patho_individuAction()
	//{
		//return $this->render('UserBundle:User:supprimer_patho_individu.html.twig');
	//}
	
////////////////////////////////////////---------------------------------
	//public function lister_prochesAction()
	//{
		//$repository = $this
			//->getDoctrine()
			//->getManager()
			//->getRepository('AdminBundle:Individu')
		//;
		//$user = $this->container->get('security.context')->getToken()->getUser();
		//$listIndividus = $repository->findBy(array('compte' => $user), array('dateNaissance' => 'desc'));
		
		
		
		////$repository = $this
			////->getDoctrine()
			////->getManager()
			////->getRepository('AdminBundle:Pathologie')
		////;
		////foreach ($listIndividus as $listIndividu)
		////{
			////$listPathologies = $repository->findBy(array('individu' => $listIndividu), array('dateDebut' => 'desc'));
		////}
		////$listPathologies = $repository->findBy(array('individu' => $listIndividus), array('dateDebut' => 'desc'));
		
		//if($listIndividus){
			//return $this->render('UserBundle:User:lister_proches.html.twig', array('liste_indiv'=>$listIndividus)); //, 'liste_patho'=>$listPathologies));
		//}
		//return $this->redirect($this->generateUrl('user_liste_proches_vide'));
		
		////$queryBuilder = $this->_em->createQueryBuilder()
			////->select('a')
		////->from($this->AdminBundle\Entity\Pathologies
		////;
		////$queryBuilder=$this->createQueryBuilder('p');
		////$query = $queryBuilder->getQuery();
		////$results = $query->getResult();
		////$numIndiv = Individu->getId();
		////$qb = $this
			////->createQueryBuilder('p')
			////->join('p.num_individu', 'indiv')
			////->addSelect('indiv')
		////;
		////$qb 
			////->where('p.num_individu = :idIndividu')
			////->setParameter('idIndividu', $numIndiv)
		////;
		////$qb
			////->getQuery()
			////->getResult()
		////;
		////$listPathologies = $repository->findBy()
		////$num_individus_compte = $repository->myFindAll($user);
		////$listPathologie = $repository->findBy(array('num_individu_id' => $num_individus_compte), array('dateNaissance' => 'desc'));
		////return $this->render('UserBundle:User:lister_proches.html.twig', array('liste_indiv'=>$listIndividu)); //, 'list_pathologies'=>$num_individus_compte));
	//}
	
////----------------------------------------------------------------------
	//public function liste_proches_videAction()
	//{
		//return $this->render('UserBundle:User:liste_proches_vide.html.twig');
	//}

///////
	//public function supprimerAction()
	//{
		//return $this->render('UserBundle:User:supprimer.html.twig');
	//}
////////////////////////////////////////////////////////////////////////
//public function lister_relationAction()
	//{
		 //$les_individu= new Individu;
		  
		 //$em = $this->getDoctrine()->getManager();
		 //$repository=$em->getRepository('AdminBundle:Individu');
		
		 ////on recupere notre utilisateur
		 //$user = $this->container->get('security.context')->getToken()->getUser();
				
		 //$liste_individu = $repository->findBy(array('compte' => $user),array('nom' => 'desc'),30,0);
		 
		 
		 //return $this->render('UserBundle:User:lister_relation.html.twig',array('liste_individu'=>$liste_individu));
	//}

	// public function liste_patho_procheAction(){

	// 	$repository = $this
	// 		->getDoctrine()
	// 		->getManager()
	// 		->getRepository('AdminBundle:Individu')
	// 	;
	// 	$user = $this->container->get('security.context')->getToken()->getUser();
	// 	$listeIndividus = $repository->findBy(array('compte' => $user), array('dateNaissance' => 'desc'));
	// 	foreach ($listeIndividus as $listeIndividu)
	// 	{
	// 		$repository = $this ->getDoctrine()
	// 							->getManager()
	// 							->getRepository('AdminBundle:Individu');
	// 		$listePathologies += $repository->findBy(array('individu' => $listeIndividu), array('dateDebut' => 'desc'));
	// 	}
	// 	if($listePathologies){
	// 		return $this->render('UserBundle:User:liste_patho_proche.html.twig', array('liste_patho'=>$listePathologies));
	// 	}
	// 	return $this->render('UserBundle:User:liste_patho_proche_vide.html.twig');
	// }

// ////////////////////////////////////////////////////////////////////////	
// 	public function liste_relations(){
// 		return $this->render('UserBundle:User:liste_relations.html.twig');
// 	}
	
// 
	

}
