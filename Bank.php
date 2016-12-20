<?php

/**
 * @author Alexandre LEHE <alex.lehe@hotmail.com >
 */    
 
class Bank {
	protected $_Cptp;
	protected $_Tarif;
	protected $_Infoid;
	
	//Constructeur d'un objet Bank
	public function __construct($cptp, $tarif, $infoid){
		$this->_Cptp = $cptp;
		$this->_Tarif = $tarif;
		$this->_Infoid = $infoid;
	}

	//getter pour renvoyer le montant du compte prépayé
	public function getCptp(){
		return $this->_Cptp;
	}

	//getter pour renvoyer le tarif
	public function getTarif(){
		return $this->_Tarif;
	}

	//getter pour renvoyer ????
	private function getId(){
		return $this->_Infoid;
	}
	


	//Pour le compte prépayé

	public function lireCptp(){
		$file = fopen($this->_Cptp,"r");
		$contenu = "";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}

	public function ecrireCptp($contenu){
		$file = fopen($this->_Cptp,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	
	//Pour les tarif


	public function lireTarif(){
		$file = fopen($this->_Tarif,"r");
		$contenu = "";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	public function ecrireTarif($contenu){
		$file = fopen($this->_Tarif,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	
	//Pour les infos de l'utilsateur 

	public function lireInfo(){
		$file = fopen($this->_Infoid,"r");
		$contenu = "";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	public function ecrireInfo($contenu){
		$file = fopen($this->_Infoid,"w");
		fputs($file,$contenu);
		fclose($file);
	}




	}
