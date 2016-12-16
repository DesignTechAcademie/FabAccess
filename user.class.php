<?php
abstract class User{

  protected $Nom;
  protected $Prenom;
  protected $IDbadge;
  protected $dateInscrip;
  public function __construct($Nom, $Prenom, $IDbadge, $dateInscrip);
  
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    $this->IDbadge = $IDbadge;
    $this->dateInscrip = $dateInscrip;
  }

  public function getNom(){
    return  $this->Nom;

  }

  public function getPrenom(){
    return  $this->Prenom;

  }
  public function setNom($newNom){
    $this->nom = $newNom;

  }

  public function setPrenom($newPrenom){
    $this->Prenom = $newPrenom;

  }
  public function getIDbadge(){
    $this->IDbadge = $newIDbadge;

  }

  public function getdateInscrip(){
    $this->dateInscrip = $newdateInscrip;

  }

  abstract public function getpresentation(){


  }

 ?>
