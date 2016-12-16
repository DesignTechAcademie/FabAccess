<?php

class Concierge extends user{

  protected $_affect
  protected $_cptp
  protected $_data
  protected $_stats

}

  public function __construct($affect, $cptp, $data, $stats, $Nom, $Prenom, $ID, $dateInscrip){
    parent::__construct($Nom, $Prenom, $ID, $dateInscrip);

    $this->affect = $affect;
    $this->cptp = $cptp;
    $this->data = $data;
    $this->stats = $stats;

  }
  public function affectbadge($idbadge){
    public function lire($idbadge){
      $id = fopen($this->idbadge, "r");
      $contenu = "";
      while($line=fgets($id)){
        $contenu .= $line;
      }
      fclose($id);
      return $contenu;
    }
      $id = $this->idbadge;
  }

  public function cptp($cptp){
    public function lire_(){
          $cptp = fopen($this->file,"r");
          $contenu = "$cptp";
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
  }

  public function export($data){
    $file = fopen($this->data,"w");
    fputs($$file,$data);
    fclose($file);
  }

  public function export($stats){

  }





public function getDroit(){
  return $this->droit;
}
public function getProfil(){
  return $this->prenom;
}
public function getAffect(){
  return $this->affect;
}
public function getGestpre(){
  return $this->gestpre;
}
public function getData(){
  return $this->data;
}
public function getStats(){
  return $this->stats;
}


public function setDroit($newdroit){
  return->droit = $newdroit;
}
public function setProfil($newprofil){
  return->profil = $newprofil;
}
public function setGestpre($newgestpre){
  return->gestpre = $newgestpre;
}
public function setProfil($newaffect){
  return->affect = $newaffect;
}

 ?>
