<?php

//src/USerBundle/Controller/UserController.php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Individu;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\HttpFoundation\Request;

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
	
	public function ajouterAction()
	{
		$individu = new Individu();
		$individu->setDateDeces(new \Datetime());
		$formBuilder = $this->get('form.factory')->createBuilder('form',$individu);
		$formBuilder
			->add('nom',	'text', array('required' => false))
			->add('prenom',	'text')
			->add('genre', ChoiceType::class, array(
				'choices'  => array(
					'Masculin' => 'Masculin',
					'Feminin' => 'Féminin',
					'Autre' => 'Autre',),
				))
			->add('dateNaissance', BirthdayType::class, array(
				'placeholder' => array(
					'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
				'format' => 'ddMMyyy'
			), array('required' => false))
			->add('dateDeces', BirthdayType::class, array(
				'placeholder' => array(
					'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
				'format' => 'ddMMyyy'
			),array('required' => false))
			->add('commentaire',	'textarea', array('required' => false))
			->add('Enregistrer',	'submit')
		;
		$form = $formBuilder->getForm();
		//$form->handleRequest($request);
		if ($form->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($individu);
			$em->flush();
			$request->getsession()->getFlashBag()->add('notice','Données bien enregistrée');
			return $this->redirect($this->generateUrl('/ajouter'));
		}
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
