<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

//recuperer une requete 
//$request=$this->getRequest();

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
	public function indexAction()
	{
		$page=1;
		//On ne sait pas combien de page il y aura mais une page doit etre >=1
		if($page <1)
		{
			//On declenche une exeption Not FoundHttpException
			//Cela va afficher la page erreur 404 
			throw $ths->createNotFoundException('Page inexsistante(page='.$page.')');
		}
		
		//en attendant de recup' les articles dans la BDD
		$articles=array(
			array(
				'titre' 	=> 'Mon weekend a Phi Phi Island !',
				'id'		=> 1,
				'auteur'	=> 'winzou',
				'contenu'	=> 'Ce weekend etait trop bien. blabla...',
				'date'		=> new \Datetime()),
			array(
				'titre' 	=> 'Repetition du NAtional Day a Singapour',
				'id'		=> 2,
				'auteur'	=> 'winzou',
				'contenu'	=> 'Ce weekend etait trop blabla...',
				'date'		=> new \Datetime()),
			array(
				'titre' 	=> 'Chiffre d\'affaire en hausse',
				'id'		=> 3,
				'auteur'	=> 'Maiiko',
				'contenu'	=> '+500% sur 1 an...',
				'date'		=> new \Datetime())
			);
			
		//Ici, on recuperera la liste des articles,puis on la passera au template
		//Pour l'instant: appel au template
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array('articles' => $articles));
		
		//On prefixe l'Id il sera dynamique par la suite
		//$id=5;
		//on veut l'url de l'article d'id $id
		//$url= $this->generateUrl('sdzblog_voir',array('id'=>$id)); 
		//Pour obtenir une url absolut on mettre le 3 eme argument a true 
		
		//on redirige vers cette Url 
		//return $this->redirect($url);
		
		//return new Response("Hello World !");
		//return $this->render('SdzBlogBundle:Blog:index.html.twig',array ('nom' => 'Marine'));
	}

	public function voirAction($id)
	{
		//On récupère la requête
		//$request= $this->getRequest();
		
		//on recupere notre parametre tag
		//$tag=$request->query->get('tag');
		
		// Ici on recuperera depuis la base de données l'article correspondant a l'id $id
		// Puis on passera l'article a la vue qu'elle puisse l'afficher
		//return new Response("Affichage de l'article d'id: ".$id.", avec le tag : ".$tag);
		
		
		//Ici, on recuperera l'article correspondant a l'id $id
		$article= array(
			'id'		=> 1,
			'titre'		=> 'Mon weekend a Phi Phi ',
			'auteur'	=> 'winzou',
			'contenu'	=> 'Ce weekend etait trop bin. Blabla..',
			'date'		=> new \Datetime());
			
		return $this->render('SdzBlogBundle:Blog:voir.html.twig',array('article'=>$article));
	}

	//On recupere tous les parametres en arguments de la methode
	public function voirSlugAction($slug, $annee, $format)
	{
		//Ici le contenu de la methode 
		return new Response("On pourrait afficher l'article correspondant au slug '".$slug."',créé en ".$annee."et au format ".$format.".");
	}
	
	public function ajouterAction()
	{
		//la gestion d'un formulaire est particuliere, mais l'idée est la suivante:
		
		if($this->get('request')->getMethod()=='POST')
		{
			//Ici, on s'occupera de la création et de la gestion du formulaire
			$this->get('session')->getFlashBag()->add('notice',' Article bien enregistré');
			
			//Puis on redirige vers la page de visualisation de cet article
			return $this->redirect($this->generateUrl('sdzblog_voir',array('id'=>5)));
		}
		//Si on est pas en POST, alors on affiche le formulaire
		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	}
	
	public function modifierAction($id)
	{
		//Ici, on recuperera l'article correspondant a $id
		$article= array(
			'id'		=> 1,
			'titre'		=> 'Mon weekend a Phi Phi ',
			'auteur'	=> 'winzou',
			'contenu'	=> 'Ce weekend etait trop bin. Blabla..',
			'date'		=> new \Datetime());
		
		//Ici, on s'occupera de la création et de la gestion du formulaire 
		return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array('article' => $article));
	}
	
	public function supprimerAction($id)
	{
		//Ici, on recuperera l'article correspondant a $id
		
		//Ici, on gerera la suppression de l'article en question
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
	}
	
	public function menuAction($nombre)//transmis via le render() depuis la vue
	{
		//on prefixe en dur une liste ici, bien entendu par la suite on la récuperera depuis la BDD !
		
		$liste = array(
			array('id' => 2, 'titre' => 'Mon dernier weekend !'),
			array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
			array('id' => 9, 'titre' => 'Petit test')
		);
		
		return $this->render('SdzBlogBundle:Blog:menu.html.twig',
			array(
			'liste_articles' => $liste //c'est l'interet: le controleur passe le variables necessaires au template !
		));
	}
}
?>
