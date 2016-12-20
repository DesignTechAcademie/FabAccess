<?php

/**
 * @author Tamime Belguendouz <tamime.belguendouz@gmail.com>
 */

//On appelle la classe FichierCSV une fois
require_once('FichierCSV.class.php');

/**
 * Class FabManager
 *
 * On crée la classe FabManager qui est la fille de la classe Concierge
 *
 */
class FabManager extends Concierge{

    /**
     * FabManager constructor.
     * @param $Nom      Nom du concièrge
     * @param $Prenom   Prénom du concièrge
     * @param $ID       Identifiant du concièrge
     * @param $dateInscrip    Date d'inscription
     */
    public function __construct($Nom, $Prenom, $ID, $dateInscrip){

    parent::__construct($Nom, $Prenom, $ID, $dateInscrip);

  }

    /**
     * Méthode pour créer un fichier CSV qui contient les droits pour utiliser un équipement
     *
     * @param $ID
     * @param $nomEquip
     * @param $droitEquip
     */
    public function ecrire_droit_equip($ID, $nomEquip, $droitEquip){
    $monfichier = new FichierCSV($nomEquip."_droits");//On crée un nouvel objet qui est un fichier CSV en indiquant le nom de l'équipement
    $list = [$ID, $droitEquip];//On crée deux colonnes contenant l'identifiant du membre et son droit d'accès
    $nomFichier-> write_csv($list);//On écrit dans les colonnes

  }

    /**
     * Méthode pour créer un fichier CSV unique qui affecte un boitier à l'entré ou à un équipement
     *
     * @param $IDBoitier
     * @param $nomEquip
     */
    public function ecrire_affectation_boitier($IDBoitier, $nomEquip){
    $monfichier = new FichierCSV("Affectation_Boitier");//On crée un nouvel objet qui est un fichier CSV unique
    $list = [$IDBoitier, $nomEquip];//On crée deux colonnes contenant l'identifiant du boitier et le nom de l'équipement
    $nomFichier-> write_csv($list);//On écrit dans les colonnes

  }

    /**
     * Méthode pour créer un fichier CSV qui contient le prix des consommables
     *
     * @param $nomEquip
     * @param $conso
     * @param $prix
     */
    public function ecrire_tarifs_equip($nomEquip, $conso, $prix){
    $monfichier = new FichierCSV($nomEquip."_conso");//On crée un fichier CSV pour chaque équipement
    $list = [$conso, $prix];//On crée deux colonnes contenant le nom du consommable et le prix
    $nomFichier-> write_csv($list);//On écrit dans les colonnes

  }

    /**
     * Méthode pour clore un incident
     */
    public function clore_incident(){
  	
  }

}


?>
