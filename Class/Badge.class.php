<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * classe qui retourne l'uid du membre avec son tag
 */
require_once ('FichierCSV.php');
class Badge {
	private $_tag;
	public function __construct($tag) {
		$this->_tag = $tag;
	}
	
	public function recherche_tag() {
		$monfichier = new FichierCSV ( "Affectation_Badge" );
		$uid_user = $monfichier->read_id_0 ( $this->_tag );
		return ($uid_user);
	}
}
?>
