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
  
  $badge = new Badge($tag)
  $uid_user = $badge->get_uid();
?>
