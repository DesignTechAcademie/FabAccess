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
     * @param $Nom
     * @param $Prenom
     * @param $ID
     * @param $dateInscrip
     */
  public function __construct($Nom, $Prenom, $ID, $dateInscrip){

    parent::__construct($Nom, $Prenom, $ID, $dateInscrip);

  }

    /**
     * @param $ID
     * @param $affectbadge
     * @param $IDbadge
     */
  public function affectation_badge($ID, $affectbadge, $IDbadge){
    $monfichier = new FichierCSV("", $affectbadge."_affectation");
    $list = [$ID, $IDbadge];
    $nomFichier-> write_csv($list);
  }

    /**
     * @param $ID
     */
  public function gestion_compte_prepaye($ID){
    $fichier = new FichierCSV("", $gestionpre."_affectation");
    $list = [$ID, ];
    $nomFichier-> lire($list);
    $nomFichier-> ecrire($list);
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
