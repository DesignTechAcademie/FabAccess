<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * classe qui retourne l'uid du membre avec son tag
 */
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
		if (is_error($uid_user)) {
            return ("[Error] Le tag n'est pas reconnu...<br>"  . $uid_user);
		} else {
		return ($uid_user[1]);
		}
	}
}
?>
