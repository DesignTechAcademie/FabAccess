<?php

require_once('FichierCSV.php');

class FabManager extends Concierge{


  public function __construct($affect, $cptp, $data, $stats, $Nom, $Prenom, $ID,
  $dateInscrip){

    parent::__construct($affect, $cptp, $data, $stats, $Nom, $Prenom, $ID,
    $dateInscrip);

  }

  public function ecrire_droit_equip($ID, $nomequip, $droitequip){
    $monfichier = new FichierCSV("", $nomequip."_droits");
    $list = [$ID, $droitequip];
    $nomfichier-> write_csv($list);

  }

  public function ecrire_affectation_boitier($IDboitier, $nomequip){
    $monfichier = new FichierCSV("", "Affectation_Boitier");
    $list = [$IDboitier, $nomequip];
    $nomfichier-> write_csv($list);

  }

  public function ecrire_tarifs_equip($nomequip, $conso, $prix){
    $monfichier = new FichierCSV("", $nomequip."_conso");
    $list = [$conso, $prix];
    $nomfichier-> write_csv($list);

  }

  public function 


}

?>
