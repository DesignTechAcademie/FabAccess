<?php

/**
 * @author Nicolas, Germain, Clément <nicolas42500@hotmail.fr>
 */

class User{

  protected $nom;
  protected $prenom;
  protected $idbadge;
  protected $dateinscrip;
  public function __construct($nom, $prenom, $idbadge, $dateinscrip){
  
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->idbadge = $idbadge;
    $this->dateinscrip = $dateinscrip;
  }

  public function getnom(){
    return  $this->nom;

  }

  public function getprenom(){
    return  $this->prenom;

  }
  public function setnom($newnom){
    $this->nom = $newnom;

  }

  public function setprenom($newprenom){
    $this->Prenom = $newprenom;

  }
  public function getidbadge(){
    $this->idbadge = $newidbadge;

  }

  public function getdateinscrip(){
    $this->dateinscrip = $newdateinscrip;

  }

 ?>
