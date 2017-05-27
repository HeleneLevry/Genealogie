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
use AdminBundle\Form\IndividuMoiType;
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


//----------------------------------------------------------------------
	public function mes_infosAction(Request $request){
		// Lister les individus du compte 
		$user = $this->container->get('security.context')->getToken()->getUser();
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$listeIndividus = $repository->findBy(array('compte' => $user));
		// Si individus sur le compte, recherche indiv_moi
		if($listeIndividus){
			foreach ($listeIndividus as $listeIndividu) {
				$repository = $this
					->getDoctrine()
					->getManager()
					->getRepository('AdminBundle:Individu')
				;
				$indiv_moi = $repository->findOneBy(array('relationType' => '.'));
			}
			// si indiv_moi, chargement entité
			if($indiv_moi){
				return $this->render('UserBundle:User:mes_infos.html.twig', array('individu' => $indiv_moi));
			}
		}
		// si pas d'individus sur le compte ou  pas d'individu moi, création indiv_moi
		$indiv_moi = new Individu();
		$user = $this->get('security.context')->getToken()->getUser();
		return $this->render('UserBundle:User:mes_infos.html.twig', array('individu' => $indiv_moi));		
	}

//----------------------------------------------------------------------
	public function modifier_mes_infosAction(Request $request){
		// Lister les individus du compte 
		$user = $this->container->get('security.context')->getToken()->getUser();
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$listeIndividus = $repository->findBy(array('compte' => $user));
		// Si individus sur le compte, recherche indiv_moi
		if($listeIndividus){
			foreach ($listeIndividus as $listeIndividu) {
				$repository = $this
					->getDoctrine()
					->getManager()
					->getRepository('AdminBundle:Individu')
				;
				$indiv_moi = $repository->findOneBy(array('relationType' => '.'));
			}
			// si indiv_moi, chargement entité
			if($indiv_moi){
				$form = $this->createForm('AdminBundle\Form\IndividuMoiType', $indiv_moi);
				if ($form->handleRequest($request)->isValid()){
					$em = $this->getDoctrine()->getManager();
					$em->persist($indiv_moi);
					$em->flush();
					return $this->redirect($this->generateUrl('user_mes_infos'));
				}
				return $this->render('UserBundle:User:modifier_mes_infos.html.twig', array('form' => $form->createView()));
			}
		}
		// si pas d'individus sur le compte ou  pas d'individu moi, création indiv_moi
			$indiv_moi = new Individu();
			$form = $this->createForm('AdminBundle\Form\IndividuMoiType', $indiv_moi);
			$user = $this->get('security.context')->getToken()->getUser();
			if ($form->handleRequest($request)->isValid()){
				$indiv_moi->setCompte($user);
				$indiv_moi->setRelationType('.');
				$indiv_moi->setDateDeces(null);
				$em = $this->getDoctrine()->getManager();
				$em->persist($indiv_moi);
				$em->flush();
				return $this->redirect($this->generateUrl('user_modifier_mes_infos'));
			}
			return $this->render('UserBundle:User:modifier_mes_infos.html.twig', array('form' => $form->createView()));		
	}

	
//----------------------------------------------------------------------
	public function mes_pathoAction()
	{
		// Recherche individus compte dont relation est moi-même
		$user = $this->container->get('security.context')->getToken()->getUser();
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$indiv_moi = $repository->findOneBy(array('compte' => $user, 'relationType' => '.'));
		// liste des pathologies de indiv_moi
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Pathologie')
		;
		$liste_patho_moi = $repository->findBy(array('individu' => $indiv_moi), array ('dateDebut' => 'desc'));
		// Afficher vue mes_pathos
		return $this->render('UserBundle:User:mes_patho.html.twig', array('individu' => $indiv_moi, 'liste_pathos' => $liste_patho_moi));
	}


//----------------------------------------------------------------------
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
	

//----------------------------------------------------------------------	
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


//----------------------------------------------------------------------	
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


//----------------------------------------------------------------------
	public function liste_patho_prochesAction(){
		// Trouver la liste des individus du compte
		$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('AdminBundle:Individu')
		;
		$user = $this->container->get('security.context')->getToken()->getUser();
		$listeIndividus = $repository->findBy(array('compte' => $user), array('dateNaissance' => 'desc'));
		// Si individus sur le compte
		if($listeIndividus){
			// Lister les pathologies de ces individus
			$repository = $this ->getDoctrine()
								->getManager()
								->getRepository('AdminBundle:Pathologie');
			$listePathologies = $repository->findBy(array('individu' => $listeIndividus), array('banque_patho' => 'asc', 'dateDebut' => 'desc'));
			// Si il y a des pathologies associées aux individus du compte
			if($listePathologies){
				// Affichage vue liste_patho_proche avec individu et listePathologies
				return $this->render(
					'UserBundle:User:liste_patho_proches.html.twig', 
					array('liste_indiv'=>$listeIndividus,  'listePathologies' => $listePathologies)
			 	);
			}
			return $this->redirect($this->generateUrl('user_liste_patho_proches_vide'));
		}
		// si pas individus compte
		else{
			return $this->redirect($this->generateUrl('user_liste_proches_vide'));
		}
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
	


}
