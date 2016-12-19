<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * Communication avec les boitiers
 */

  spl_autoload_register(function ($class) {
    include 'Class/' . $class . '.class.php';
});

  $tag = $_GET['tag'];
  $addr = $_GET['addr'];
  
  $badge = new Badge($tag);
  $uid_user = $badge->get_uid();
  
  $boitier_demandeur = new Boitier($addr);
  $equip_demandeur = $boitier_demandeur();
  
  if ($equip_demandeur == "accueil"){
  	// vérifier fichier log pour savoir si entree ou sortie
  	$dolibarr = new Dolibarr();
  	$nom = $dolibarr->get_nom($uid_user);
  	$prenom = $dolibarr->get_prenom($uid_user);
  	$estajour = $dolibarr->get_ajour($uid_user);
  	
  }else {
  	
  }

  // données factices
  $id_equipement = "10";
  $id_user = "5";
  $id_lieu = "32971823";


  $monlog = new Log();
  $result = $monlog->record($id_equipement, $id_user, $id_lieu);
  echo $result;


?>
