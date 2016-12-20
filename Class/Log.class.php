<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 * 
 * Enregistrement de l'utilisation des équipements
 * Enregistrement des entrées / sorties
 * et recherche des données
 */
require_once ('Agenda.class.php');
require_once ('Fichier.class.php');
require_once ('FichierCSV.class.php');
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
			return ("error : " . $result);
		} else {
			$event = $result [1];
			$lieu = $result [2];
		}
		$list = [ 
				$id_Equip,
				$id_user,
				$date_deb,
				$date_fin,
				$lieu,
				$event 
		];
		$myfile->write_csv ( $list );
		return ("ok");
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
		// $lieu = equipement_lieu($id_Equip);
	
		$agenda = new Agenda ();
		$result = $agenda->get ( $id_lieu );
		if (! is_array ( $result )) {
            $event = null;
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
		$myfile->write_csv ( $list );

		return ("ok");
	}
}
?>
