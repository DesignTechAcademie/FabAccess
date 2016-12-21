<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 * 
 * Manipulation de fichier
 */
class Fichier {
	/**
	 * 
	 * @var string nom de l'objet
	 */
	private $_nomFichier;
	/**
	 * Constructeur
	 * 
	 * @param string $chemin
	 * @param string $nom
	 * @param string $extension
	 */
	public function __construct($chemin, $nom, $extension) {
		$this->_nomFichier = $chemin . $nom . $extension;
	}
	/**
	 * fonction ecrire dans un fichier
	 * 
	 * @param string $contenu
	 */
	public function ecrire($contenu) {
		if ( !file_exists ( $this->_nomFichier )) {
			return "[Error] Fichier " . $this->_nomFichier . " introuvable !";
		} else {
			$fichier = fopen ( $this->_nomFichier, "a+" );
			$retour = fputs ( $fichier, $contenu );
			fclose ( $fichier );
			if ($retour){
				return "ok";
			}else{
				return "[Error] Impossible d'écrire dans le fichier " . $this->_nomFichier . " !";
			}
		}
	}
	/**
	 * fonction lire un fichier
	 * 
	 * @return string contenu du fichier
	 */
	public function lire() {
		if ( !file_exists ( $this->_nomFichier )) {
			return "[Error] Fichier " . $this->_nomFichier . " introuvable !";
		} else {
			$fichier = fopen ( $this->_nomFichier, "r" );
			$contenu = "";
			while ( $line = fgets ( $fichier ) ) {
				$contenu = $contenu . $line;
			}
			fclose ( $fichier );
			return $contenu;
		}
	}
	/**
	 * fonction lire un fichier
	 * 
	 * @return string[] contenu en tableau
	 */
	public function lire_array() {
        if ( !file_exists ( $this->_nomFichier )) {
        	return "[Error] Fichier " . $this->_nomFichier . " introuvable !";
        } else {
            $fichier = fopen($this->_nomFichier, "r");
            $contenu = array();
            while ($line = fgets($fichier)) {
                $contenu [] = $line;
            }
            fclose($fichier);
            return $contenu;

        }
	}
}

?>
