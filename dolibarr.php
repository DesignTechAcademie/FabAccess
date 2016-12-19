<?php
/**
 * @author Julien Theze <julien.theze@gmail.com>
 * Ce fichier instancie un nouvel objet de la classe dolibarr
 */

require('Class/Dolibarr.class.php');

$test = new Dolibarr();
$test->getUser(1);
?>
