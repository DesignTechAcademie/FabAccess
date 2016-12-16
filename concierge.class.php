<?php
require ('bank.class.php');
require ('FichierCSV.php');


class Concierge extends user{


  public function __construct($Nom, $Prenom, $ID, $dateInscrip){

    parent::__construct($Nom, $Prenom, $ID, $dateInscrip);

  }
  public function affectation_badge($ID, $affectbadge, $IDbadge){
    $monfichier = new FichierCSV("", $affectbadge."_affectation");
    $list = [$ID, $IDbadge];
    $nomFichier-> write_csv($list);
  }

  public function gestion_compte_prepaye($ID){
    $fichier = new FichierCSV("", $gestionpre."_affectation");
    $list = [$ID, ];
    $nomFichier-> lire($list);
    $nomFichier-> ecrire($list);
  }

  public function getInfoMembre($ID){
    $monfichier = new FichierCSV("", $export."_données");
    $list = [$ID, $nom, $prenom, $cptp, $adhesion];
    $nomFichier-> lire($list);
    $nomFichier-> ecrire($list);
  }

  public function statistiques1(){


  }


 ?>
