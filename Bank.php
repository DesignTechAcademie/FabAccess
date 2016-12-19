<?php

/**
 * @author Alexandre LEHE <alex.lehe@hotmail.com >
 */    
 
class Bank {
	protected $_Cptp;
	protected $_Tarif;
	protected $_Infoid;
	
	
	public function __construct($cptp, $tarif, $Infoid){
		$this-> _Cptp = $cptp;
		$this-> _Tarif = $tarif;
		$this-> _Infoid = $Infoid;
	}
	
	public function getCptp(){
		return $this -> _Cptp;
	}
	public function getTarif(){
		return $this -> _Tarif;
	}
	
	private function getInfoid(){
		return $this -> _Infoid;
	}
	


	//Pour le compte prépayé

	public function lire_(){
		$file = fopen($this->_Cptp,"r");
		$contenu = _Cptp;
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	public function ecrire($contenu){
		$file = fopen($this->cptp,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	
	//Pour les tarif
	public function __construct($file){
		$this->_tarif= $file;
	}
	public function lireTarif(){
		$file = fopen($this->tarif,"r");
		$contenu = "$tarif";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	public function ecrire($contenu){
		$file = fopen($this->tarif,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	
	//Pour les infos de l'utilsateur 

	public function lire_(){
		$file = fopen($this->infoid,"r");
		$contenu = "$_Infoid";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}
	public function ecrire($contenu){
		$file = fopen($this->infoid,"w");
		fputs($file,$contenu);
		fclose($file);
	}




	}
