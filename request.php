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

  // données factices
  $id_equipement = "10";
  $id_user = "5";
  $id_lieu = "32971823";


  /*
  $badge = new Badge($tag)
  $uid_user = $badge->get_uid();
  */


  $monlog = new Log();
  $result = $monlog->record($id_equipement, $id_user, $id_lieu);
  echo $result;




?>
