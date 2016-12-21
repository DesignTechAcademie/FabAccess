<?php

/**
 * Created by PhpStorm.
 * User: tamime
 * Date: 21/12/16
 * Time: 09:03
 */
require_once ('../config.inc.php');
require_once ('Fichier.class.php');
require_once ('FichierCSV.class.php');

class Article{

    /**
     * Méthode pour créer un fichier CSV qui contient le prix des consommables
     *
     * @param $idConso
     * @param $conso
     * @param $prix
     * @return string
     */

    public function ajouter($idConso, $conso, $prix){
        $monfichier = new FichierCSV("Articles");//On crée un fichier CSV pour chaque équipement
        $list = [$idConso, $conso, $prix];//On crée deux colonnes contenant le nom du consommable et le prix
        $result = $monfichier-> write_csv($list);//On écrit dans les colonnes
        return $result;

    }

    public function modifier(){


    }

}

$article = new Article();
$result = $article->ajouter(1, 'fil3D', 3);
var_dump($result);