<?php

//src/USerBundle/Controller/UserController.php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Relation;
use AdminBundle\Form\RelationType;
use AdminBundle\Entity\Individu;
use AdminBundle\Form\IndividuType;


class UserController extends Controller
{	
	
	
	public function indexAction(){
		return $this->render('UserBundle:User:index.html.twig');
	}

	public function accueilAction(){
		return $this->render('UserBundle:User:accueil.html.twig');
	}	
	
	public function menuAction()//transmis via le render() depuis la vue /app
	{		
		return $this->render('UserBundle:User:menu.html.twig');
	}
	
	public function ajouterAction(Request $request)
	{
		$relation = new Relation();
		$form = $this->get('form.factory')->create(new RelationType(),$relation);
		if ($form->handleRequest($request)->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($relation);
			$em->flush();
			$request->getsession()->getFlashBag()->add('notice','Données bien enregistrées');
			return $this->redirect($this->generateUrl('user_connected_index'));
		}
		
		//$individu = new Individu();
		//$individu->getCompte();
		//$form = $this->get('form.factory')->create(new IndividuType(),$individu);
		//if ($form->handleRequest($request)->isValid()){
			//$em = $this->getDoctrine()->getManager();
			//$em->persist($individu);
			//$em->flush();
			//$request->getsession()->getFlashBag()->add('notice','Données bien enregistrées');
			//return $this->redirect($this->generateUrl('user_connected_index'));
		//}
		
		return $this->render('UserBundle:User:ajouter.html.twig', array('form' => $form->createView(),));
	}
	
	public function modifierAction()
	{
		return $this->render('UserBundle:User:modifier.html.twig');
	}
	
	public function supprimerAction()
	{
		return $this->render('UserBundle:User:supprimer.html.twig');
	}
	
	public function nous_contacterAction()
	{
		return $this->render('UserBundle:User:nous_contacter.html.twig');
	}
	
	public function supprimer_compte_1Action()
	{
		return $this->render('UserBundle:User:supprimer_compte_1.html.twig');
	}
	
	public function supprimer_compte_2Action()
	{
		//récupération user	
		$user = $this->container->get('security.context')->getToken()->getUser();
		
		//récupération service USerMAnager 
		$userManager = $this->get('fos_user.user_manager');
		$userManager->deleteUser($user);
		
		return $this->render('UserBundle:User:supprimer_compte_2.html.twig');
	}
}
