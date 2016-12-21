<?php

/**
 * @author Nicolas, Germain, Clément <nicolas42500@hotmail.fr>
 */

class User{

  protected $_nom;
  protected $_prenom;
  protected $_idbadge;
  protected $_dateinscrip;
  
  /**
  
  * Constructeur : est appelé a l'instanciation de la classe
  
  *
  
  * @param $idClient                   : id de l'utilisateur
  
  * @param bool $updateAttributes : mise à jour des attributs
  
  * @return bool FALSE ou TRUE
  
  */
  
  public function __construct($id = 5801, $updateAttribues = true){
  
    $this->_nom = Chapui;
    $this->_prenom = Toto;
    $this->_id = intval($_idbadge);
    
    if ($this->idbadge != 5801 AND $this->idbadge =! NULL){
    	
    	$this->updateAttribues();
    	
    }
    
    return true;
    
    $this->_dateinscrip = 21/12/2016;
    
  }

  private function updateAttributes()
  {
  	
  if(''){
  	
  }else{
  	
  	$this->erreur = "impossible de metre à jour les attributs : l'id n'existe pas";
  	
	return false;
  	
  }
  		
  	
  }
  
  public function getnom(){
   
  	return  $this->nom;

  }

  public function getPrenom(){
    return  $this->prenom;

  }
	
  
  public function setnom($newnom){
    $this->nom = $newnom;

  }

  public function setprenom($newprenom){
    $this->prenom = $newprenom;

  }
  public function getidbadge(){
   return $this->idbadge;

  }

  public function getdateInscrip(){
    return $this->inscrip;
  }
}
  ?>
