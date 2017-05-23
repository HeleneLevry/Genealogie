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
	public function indexAction(){
		return $this->render('UserBundle:User:index.html.twig');
	}

//----------------------------------------------------------------------
	public function accueilAction(){
		return $this->render('UserBundle:User:accueil.html.twig');
	}	
	
//----------------------------------------------------------------------
	public function menuAction(){//transmis via le render() depuis la vue /app		
		return $this->render('UserBundle:User:menu.html.twig');
	}
	
//----------------------------------------------------------------------	
	public function ajout_procheAction(Request $request){
		
		$individu = new Individu();		
		$user = $this->get('security.context')->getToken()->getUser();
		$userId = $user->getId();
		$form = $this->createForm('AdminBundle\Form\IndividuType', $individu);
		if ($form->handleRequest($request)->isValid()){
			$individu->setCompte($user);
			$em = $this->getDoctrine()->getManager();
			$em->persist($individu);
			$em->flush();
			return $this->redirect($this->generateUrl('user_connected_index'));
		}		
		return $this->render('UserBundle:User:ajout_proche.html.twig', array('form' => $form->createView()));
	}
	
////////////////////////////////////////////////////////////////////////	
	public function modif_procheAction($num_individu){
		return $this->render('UserBundle:User:modif_proche.html.twig');
	}

////////////////////////////////////////////////////////////////////////	
	public function suppr_proche(){
		return $this->render('UserBundle:User:suppr_proche.html.twig');
	}

////////////////////////////////////////////////////////////////////////	
	public function liste_patho_procheAction($num_indiv){
		$repository = $this ->getDoctrine()
							->getManager()
							->getRepository('AdminBundle:Pathologie');
		$listePathologies = $repository->findBy(array('individu' => $num_indiv)); //,array('dateDebut' => 'desc'));
		if($listePathologies){
			return $this->render('UserBundle:User:liste_patho_proche.html.twig', array('liste_patho'=>$listePathologies, 'num_indiv'=>$num_indiv));
		}
		return $this->render('UserBundle:User:liste_patho_proche_vide.html.twig');
	}

//----------------------------------------------------------------------	
	public function liste_patho_proche_videAction(){
		return $this->render('UserBundle:User:liste_patho_proche_vide.html.twig');
	}


////////////////////////////////////////////////////////////////////////	
	public function ajout_patho_procheAction(Request $request){

		$pathologie = new Pathologie();	
		$form = $this->createForm('AdminBundle\Form\PathologieType', $pathologie);
		if ($form->handleRequest($request)->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($pathologie);
			$em->flush();
			return $this->redirect($this->generateUrl('user_connected_index'));
		}		
		return $this->render('UserBundle:User:ajout_patho_proche.html.twig', array('form' => $form->createView()));
	}
	
////////////////////////////////////////////////////////////////////////	
	public function modif_patho_proche(){
		return $this->render('UserBundle:User:modif_patho_proche.html.twig');
	}

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

//////////////////////////////////////////////////////////////////////	
	public function modif_relationAction(){
		return $this->render('UserBundle:User:modif_relation.html.twig');
	}

////////////////////////////////////////////////////////////////////////	
	public function suppr_relation(){
		return $this->render('UserBundle:User:suppr_relation.html.twig');
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
				$repository = $this ->getDoctrine()
									->getManager()
									->getRepository('AdminBundle:Pathologie');
				$listePathologies[] = $repository->findBy(array('individu' => $listeIndividu)); //, array('dateDebut' => 'desc'));
			}
			if($listePathologies){
				return $this->render('UserBundle:User:liste_patho_proches.html.twig', array('liste_patho'=>$istePathologies, 'liste_indiv'=>$listeIndividus));
			}
			return $this->render('UserBundle:User:liste_patho_proches_vide.html.twig');
		}
		return $this->redirect($this->generateUrl('user_liste_proches_vide'));
		
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
		//récupération user	
		$user = $this->container->get('security.context')->getToken()->getUser();
		//récupération service USerManager 
		$userManager = $this->get('fos_user.user_manager');
		$userManager->deleteUser($user);
		//return
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
