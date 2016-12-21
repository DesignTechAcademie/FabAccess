<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * Communication avec les boitiers
 */

require_once 'config.inc.php';
require_once 'common.inc.php';

spl_autoload_register(function ($class) {
    include 'Class/' . $class . '.class.php';
});

if (!isset($_GET['tag'])) {
    echo("Paramètre 'tag' manquant... Opération abandonnée");
    exit;
}
if (!isset($_GET['addr'])) {
    echo("Paramètre 'addr' manquant... Opération abandonnée");
    exit;
}
$tag = $_GET['tag'];
$addr = $_GET['addr'];

$badge = new Badge($tag);
$uid_user = $badge->recherche_tag();
if (is_error($uid_user)) {
    echo "[Error] La requête ne peut pas être traitée...<br>" . $uid_user;
    exit();
}

$boitier_demandeur = new Boitier($addr);
$equip_demandeur = $boitier_demandeur->recherche_boitier();
if (is_error($equip_demandeur)) {
    echo "[Error] La requête ne peut pas être traitée...<br>" . $equip_demandeur;
    exit();
}
$id_equipement = $equip_demandeur[1];
$id_lieu_equipement = $equip_demandeur[2];

// recherche du lieu ou est le boitier/equipement

if ($id_equipement == "0") {
    $monlog = new Log("Access");
    $result = $monlog->record_inout($uid_user, $id_lieu_equipement);
    // vérifier fichier log pour savoir si entree ou sortie
    /*
    $dolibarr = new Dolibarr();
    $nom = $dolibarr->get_nom($uid_user);
    $prenom = $dolibarr->get_prenom($uid_user);
    $estajour = $dolibarr->get_ajour($uid_user);
    */

    if ($result=="ok") {
        $var = "{\"nom\" : \"$nom\", \"prenom\" : \"$prenom\", \"estajour\" : \"$estajour\"}";
    } else {
        $var = "[Error]";
    }
    echo ($var);

} else {
    $monlog = new Log("Utilisation");
    $result = $monlog->record_use($id_equipement, $id_user, $id_lieu);
    echo $result;

}




?>
