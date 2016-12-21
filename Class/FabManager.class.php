<?php

/**
 * @author Tamime Belguendouz <tamime.belguendouz@gmail.com>
 */

//On appelle la classe FichierCSV une fois
require_once('FichierCSV.class.php');
require ('Article.class.php');

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
        $monfichier-> write_csv($list);//On écrit dans les colonnes

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
        $monfichier-> write_csv($list);//On écrit dans les colonnes

    }

    /**
     * On appelle la méthode de la classe Article pour modifier le prix des consommables
     *
     * @param $idConso
     * @param $conso
     * @param $prix
     * @return string
     */
    public function ajouter_article($idConso, $conso, $prix){
        $article = new Article;
        $result = $article->ajouter($idConso, $conso, $prix);
        return $result;
    }

    /**
     * Méthode pour clore un incident
     */
    public function clore_incident(){
  	
    }

}

$articles = new FabManager();
$result = $articles->ajouter_article(4,'plastique', 3);
var_dump($result);


?>
