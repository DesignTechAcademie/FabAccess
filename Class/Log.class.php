<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 * 
 * Enregistrement de l'utilisation des équipements
 * Enregistrement des entrées / sorties
 * et recherche des données
 */
class Log {
	/**
	 * enregistrement de l'utilisation d'un équipement
	 * 
	 * @param string $id_Equip
	 * @param string $id_user
	 * @param string $id_lieu
	 * @return string resultat
	 */
	public function record_use($id_Equip, $id_user, $id_lieu) {
		$myfile = new FichierCSV ("Utilisation" );
		$date_deb = date ( "c" );
		$date_fin = "";
		// $lieu = equipement_lieu($id_Equip);
		
		$agenda = new Agenda ();
		$result = $agenda->get ( $id_lieu );
		if (! is_array ( $result )) {
			$event = null;
			if ( is_error($result)){
				return "[Error] Agenda illisible !";
			}
		} else {
			$event = $result [1];
		}
		$list = [ 
				$id_Equip,
				$date_deb,
				$date_fin,
				$id_user,
				$lieu,
				$event 
		];
		return ($myfile->write_csv ( $list ));
	}
	/**
	 * enregistrement du passage à l'accueil
	 * 
	 * @param string $id_user
	 * @param string $id_lieu
	 * @return string résultat
	 */
	public function record_inout($id_user, $id_lieu) {
		$myfile = new FichierCSV ("Frequentation" );
		
		$date_deb = date ( "c" );
		$date_fin = "";
	
		$agenda = new Agenda ();
		$result = $agenda->get ( $id_lieu );
		if (! is_array ( $result )) {
            $event = null;
            if ( is_error($result)){
            	return "[Error] Agenda illisible !";
            }
		} else {
			$event = $result [1];
		}
		$list = [
				$id_user,
				$date_deb,
				$date_fin,
            	$id_lieu,
				$event
		];
		return ($myfile->write_csv ( $list ));
	}
	/**
	 * complète l'entrée correspondante avec la date/heure de sortie
	 *
	 * @param string $id_user
	 * @param string $id_lieu
	 */
	public function close_inout($id_user, $id_lieu){
		$myfile = new FichierCSV ("Frequentation" );
		$datas = $myfile->lire_array();
		foreach ( $datas as $value ) {
			$list = explode ( ";", $value ); // ligne en tableau
			if ($list[0] == $id_user && $list[3] == $id_user ) {
				if ($list[2] == "") {
					$list[2] = date ( "c" );
					return ("ok");
				}
			}
		}
		return ("[error] : Pas d'entrée correspondante !");
	}
	/**
	 * complète l'utilisation correspondante avec la date/heure de sortie
	 *
	 * @param string $id_user
	 * @param string $id_lieu
	 */
	public function close_use($id_equip, $id_user, $id_lieu){
		$myfile = new FichierCSV ("Frequentation" );
		$datas = $myfile->lire_array();
		foreach ( $datas as $value ) {
			$list = explode ( ";", $value ); // ligne en tableau
			if ($list[0] == $id_equip && $list[3] == $id_lieu && $list[4] == $id_user) {
				if ($list[2] == "") {
					$list[2] = date ( "c" );
					return ("ok");
				}
			}
		}
		return ("[error] : Pas d'utilisation correspondante !");
	}
}
?>
