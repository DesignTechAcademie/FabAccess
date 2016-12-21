<?php

/**
 * @author Flavien CERIANI <flavien.ceriani@gmail.com>
 */
require('Bank.class.php');
require ('FichierCSV.class.php');

/**
 * classe fille de user
 */
class Concierge extends user{

    /**
     * Concierge constructor.
     * @param $nom
     * @param $prenom
     * @param $idbadge
     * @param $dateinscrip
     */
  public function __construct($nom, $prenom, $idbadge, $dateinscrip){

    parent::__construct($nom, $prenom, $idbadge, $dateinscrip);

  }

    /**
     * @param $tag
     */
  public function affectation_badge($tag){
      $idbadge = new Badge();
      $idbadge->recherche_tag();
      $idbadge = new FichierCSV("affectation badge");
      $list = [$tag, $idbadge];
      $idbadge-> write_csv($list);
  }

    /**
     * @param $ID
     * @param $debit
     * @param $cptp
     */
  public function gestion_compte_prepaye($ID, $debit, $cptp){
    $fichier =new Bank($cptp);
    $list = [$ID, $debit, $cptp];
    $fichier-> lireInfo();
    $fichier-> ecrireInfo($list);
  }

    /**
     * @param $ID
     * @param $export
     * @param $nom
     * @param $prenom
     * @param $cptp
     * @param $dateinscrip
     */
  public function getInfoMembre($ID, $export, $nom, $prenom, $cptp, $dateinscrip){
    $monfichier = new FichierCSV("", $export."_données");
    $list = [$ID, $nom, $prenom, $cptp, $dateinscrip];
    $monfichier-> lire($list);
    $monfichier-> ecrire($list);
  }

    /**
     *
     */
  public function statistiques1(){


  }
  
}

 ?>
