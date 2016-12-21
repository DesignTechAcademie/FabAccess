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
     * @param $ID
     * @param $IDbadge
     *
     */
  public function affectation_badge($ID, $IDbadge){
      $ID = $idbadge-> recherche_tag();
      $fichier = new FichierCSV($monfichier);
    $list = [$ID, $IDbadge];
      $idbadge-> write_csv($list);
  }

    /**
     * @param $ID
     * @param $debit
     * @param $cptp
     */
  public function gestion_compte_prepaye($ID, $debit, $cptp){
    $fichier = new Bank();
    $list = [$ID, $debit, $cptp];
    $fichier-> lireInfo();
    $fichier-> ecrireInfo($list);
  }

    /**
     * @param $ID
     */
  public function getInfoMembre($ID){
    $monfichier = new FichierCSV("", $export."_données");
    $list = [$ID, $nom, $prenom, $cptp, $adhesion];
    $nomFichier-> lire($list);
    $nomFichier-> ecrire($list);
  }

    /**
     *
     */
  public function statistiques1(){


  }
  
}
 ?>
