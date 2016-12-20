<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * classe qui retourne le nom de l'equipement avec son adresse Mac
 */
require_once ('FichierCSV.php');
class Boitier {
	/**
	 * 
	 * @var string adresse MAC
	 */
	private $_mac;
	/**
	 * Constructeur
	 * 
	 * @param string $mac
	 */
	public function __construct($mac) {
		$this->_mac = $mac;
	}
	/**
	 * fonction recherche_boitier
	 * 
	 * @return string nom de l'équipement
	 */
	public function recherche_boitier() {
		$monfichier = new FichierCSV ( "Affectation_Boitier" );
		$nom_equip = $monfichier->read_id_0 ( $this->_mac );
		return ($nom_equip);
	}
}
?>
