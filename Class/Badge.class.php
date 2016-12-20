<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * classe qui retourne l'uid du membre avec son tag
 */
require_once ('FichierCSV.php');
class Badge {
	/**
	 * 
	 * @var string tag
	 */
	private $_tag;
	/**
	 * Constructeur
	 * 
	 * @param string $tag
	 */
	public function __construct($tag) {
		$this->_tag = $tag;
	}
	/**
	 * fonction recherche_tag
	 * 
	 * @return string UID user
	 */
	public function recherche_tag() {
		$monfichier = new FichierCSV ( "Affectation_Badge" );
		$uid_user = $monfichier->read_id_0 ( $this->_tag );
		return ($uid_user);
	}
}
?>
