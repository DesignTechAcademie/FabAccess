<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * Communication avec les boitiers
 */
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
// recherche du lieu ou est le boitier/equipement

if ($equip_demandeur == "accueil") {
    $monlog = new Log("Access");
    $result = $monlog->record_inout($id_user, $id_lieu);
    // vérifier fichier log pour savoir si entree ou sortie
    $dolibarr = new Dolibarr();
    $nom = $dolibarr->get_nom($uid_user);
    $prenom = $dolibarr->get_prenom($uid_user);
    $estajour = $dolibarr->get_ajour($uid_user);

} else {
    $monlog = new Log("Utilisation");
}

// données factices
$id_equipement = "10";
$id_user = "5";
$id_lieu = "32971823";


$monlog = new Log();
$result = $monlog->record_use($id_equipement, $id_user, $id_lieu);
echo $result;


?>
