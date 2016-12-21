<?php


$stat = new Stat();
$tab = $stat->getFrequentationTable();

$html = $tab;

require 'view/statView.php';
