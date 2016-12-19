<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * classe qui retourne le nom de l'equipement avec son adresse Mac
 */
require_once ('FichierCSV.php');
class Boitier {
	private $_mac;
	public function __construct($mac) {
		$this->_mac = $mac;
	}
	
	// Méthode pour créer un fichier CSV qui contient l'affecattion des équipements
	public function affectation_boitier() {
		$monfichier = new FichierCSV ( "", "Affectation_Boitier" );
		$nom_equip = $monfichier->read_id_0 ( $this->_mac );
		return ($nom_equip);
	}
}
?>
