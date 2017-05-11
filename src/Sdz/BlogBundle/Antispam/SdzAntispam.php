<?php
// src/Sdz/BlogBundle/Antispam/SdzAntispam.php

namespace Sdz\BlogBundle\Antispam;

class SdzAntispam extends \Twig_Extension
{	
	protected $mailer;
	protected $locale;
	protected $nbForSpam;
	
	/* Twig va executer cette methode pour savoir quelle fonctions ajoute notre service */
	
	public function getFunctions()
	{
		return array('checkIfSpam' => new \Twig_Function_Method($this, 'isSpam'));
	}
	//La methode getName() identifie votre extension Twig, elle et obligatoire
	
	public function getName()
	{
		return 'SdzAntispam';
	}
	
	public function __construct(\Swift_Mailer $mailer, $locale, $nbForSpam)
	{
		$this->mailer		=$mailer;
		$this->locale		=$locale;
		$this->nbForSpam	=(int) $nbForSpam;
	}
		
	/**
	 * Vérifie si le texte est un sapm ou non
	 * Un tete est considere comme spam a partir de 3 liens 
	 * ou adresses e-mail dans son contenu
	 * 
	 * @param string $text
	 */
	 public function isSpam($text)
	 {
		 return($this->countLinks($text)+$this->countMails($text))>=$this->nbForSpam;
	 }
	 
	 /**
	  * Compte les URL de $text
	  * 
	  * @param string $text
	  */
	  private function countLinks($text)
	  {
		  preg_match_all(
					'#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i',
					$text,
					$matches);
					
		  return count($matches[0]);
	  }
	  
	/**
	 * Compte les e-mails de $text
	 * 
	 * @param string $text
	 */
	 
	 private function countMails($text)
	 {
	  preg_match_all(
				'#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}#i',
				$text,
				$matches);
				
	  return count($matches[0]);
	 }
}
?>
