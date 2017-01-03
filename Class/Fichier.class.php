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
		$fichier = fopen ( $this->_nomFichier, "a+" );
		fclose ( $fichier );
		$task_owner = trim(shell_exec('whoami'));
		$dir_owner = posix_getpwuid(fileowner(PATH_DATA))['name'];
		$dir_grp = posix_getpwuid(filegroup(PATH_DATA))['name'];
		$file_owner = posix_getpwuid(fileowner($this->_nomFichier))['name'];
		$file_grp = posix_getpwuid(filegroup($this->_nomFichier))['name'];
		
		if ( !file_exists ( $this->_nomFichier )) {
			if ( $task_owner != $dir_owner && $task_owner != $dir_grp ){
				if ( substr(sprintf('%o', fileperms(PATH_DATA)), -1, 1) != 7){
					return ("[Error] Le dossier " . PATH_DATA . " n'as pas les permissions world requises !");
				}
			}else {
				if ( $task_owner != $dir_owner ){
					if ( substr(sprintf('%o', fileperms(PATH_DATA)), -2, 1) != 7){
						return ("[Error] Le dossier " . PATH_DATA . " n'as pas les permissions group requises !");
					}
				}else {
					if ( substr(sprintf('%o', fileperms(PATH_DATA)), -3, 1) != 7){
						return ("[Error] Le dossier " . PATH_DATA . " n'as pas les permissions owner requises !");
					}
					return ("[Error] Erreur inconnue,impossible de créer le fichier!");
				}
			}
			return ("[Error] Fichier " . $this->_nomFichier . " introuvable !");		
		}else{
			$file_perm = substr(sprintf('%o', fileperms($this->_nomFichier)), -3);
			if ( $task_owner != $file_owner && $task_owner != $file_grp ){
				if ( substr($file_perm, -1, 1) != 7 && substr($file_perm, -1, 1) != 6){
					return ("[Error] Le fichier " . $this->_nomFichier . " n'as pas les permissions world requises !");
				}
			}else {
				if ( $task_owner != $file_owner ){
					if ( substr($file_perm, -2, 1) != 7 && substr($file_perm, -2, 1) != 6){
						return ("[Error] Le fichier " . $this->_nomFichier . " n'as pas les permissions group requises !");
					}
				}else {
					if ( substr($file_perm, -3, 1) != 7 && substr($file_perm, -3, 1) != 6){
						return ("[Error] Le fichier " . $this->_nomFichier . " n'as pas les permissions owner requises !");
					}
				}
			}
		}
	}
	/**
	 * fonction ecrire dans un fichier
	 * 
	 * @param string $contenu
	 */
	public function ecrire($contenu) {
		$fichier = fopen ( $this->_nomFichier, "a+" );
		$retour = fputs ( $fichier, $contenu );
		fclose ( $fichier );
		if ($retour != false){
			return "ok";
		}else{
			return ("[Error] Impossible d'écrire dans le fichier " . $this->_nomFichier . " !");
		}
	}
	/**
	 * fonction lire un fichier
	 * 
	 * @return string contenu du fichier
	 */
	public function lire() {
		$fichier = fopen ( $this->_nomFichier, "r" );
		$contenu = "";
		while ( $line = fgets ( $fichier ) ) {
			$contenu = $contenu . $line;
		}
		fclose ( $fichier );
		return $contenu;
	}
	/**
	 * fonction lire un fichier
	 * 
	 * @return string[] contenu en tableau
	 */
	public function lire_array() {
		$fichier = fopen($this->_nomFichier, "r");
		$contenu = array();
		while ($line = fgets($fichier)) {
			$contenu [] = $line;
		}
		fclose($fichier);
		return $contenu;
	}
}

?>
