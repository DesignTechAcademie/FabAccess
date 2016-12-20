<?php
/**
 * Ce fichier instancie un nouvel objet de la classe dolibarr
 * 
 * @author Julien Theze <julien.theze@gmail.com>
 */

require('Class/Dolibarr.class.php');

$test = new Dolibarr();
$test->getUser(1);
?>
