<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 * 
 * Manipulation du fichier JSON de openagenda
 * renvoie une chaine si erreur ou pas d'événement
 *  
 * utilisation :
 * $agenda = new Agenda ();
 *		$result = $agenda->get ( $id_lieu );
 *		if (! is_array ( $result )) {
 *			return ("error : " . $result);
 *		} else {
 *			$event = $result [1];
 *			$lieu = $result [2];
 *		}
 * 
 */
include ('config.inc.php');
class Agenda {
/**
 * methode get :
 * 
 * renvoie un tableau avec trois données de l'événement :
 * 
 * @return uid event, titre, lieu
 * 
 * @paramr int $lieu
 */
	public function get($lieu) {
		$list = array ();
		$mesevents = file_get_contents ( "OPENAGENDA_URL" ); // récupération du fichier Json

        // données factices
        $monfichier = new Fichier(PATH_DATA,"events",".json");
        $mesevents = $monfichier->lire();
		
		$json_ok = json_decode ( $mesevents ); // construction de l'objet
		if (json_last_error () != 0) {
			return ("[Error] fichier Json non décodé : " . json_last_error ());
		}
		
		$number = $json_ok->{'total'}; // nombre d'événements
		for($i = 0; $i < $number; $i ++) {
			$date_arr = $json_ok->{'events'} [$i]->{'timings'}; // dates des événements
			for($j = 0; $j < count ( $date_arr ); $j ++) {
				$start = $json_ok->{'events'} [$i]->{'timings'} [$j]->{'start'};
				$end = $json_ok->{'events'} [$i]->{'timings'} [$j]->{'end'};
				$sta_dat = new DateTime ( $start ); // objets date
				$end_dat = new DateTime ( $end );
				$today = new DateTime ();
				if ($sta_dat < $today) { // comparaison des dates
					if ($end_dat > $today) {
						if ($lieu == $json_ok->{'events'} [$i]->{'location'}->{'uid'}) { // sur le lieu considéré
							$list [] = $json_ok->{'events'} [$i]->{'uid'};
							$list [] = $json_ok->{'events'} [$i]->{'title'}->{'fr'};
							$list [] = $json_ok->{'events'} [$i]->{'location'}->{'name'};
							return ($list);
						}
					}
				}
			}
		}
		return ("no event found");
	}
	/**
	 * methode get_all :
	 *
	 * renvoie un tableau 2 dimensions avec  six données de l'événement :
	 *
	 * @return uid event, titre, uid lieu, lieu, date début, date fin
	 *
	 * @param none
	 */
	public function get_all() {
		$tableau = array ();
		$mesevents = file_get_contents ( "OPENAGENDA_URL" ); // récupération du fichier Json
		// $monfichier = new Fichier("","events",".json");
		// $mestrucs = $monfichier->lire();
		
		$json_ok = json_decode ( $mesevents ); // construction de l'objet
		if (json_last_error () != 0) {
			return ("[Error] fichier Json non décodé : " . json_last_error ());
		}
		
		$number = $json_ok->{'total'}; // nombre d'événements
		$trouve = false;
		for($i = 0; $i < $number; $i ++) {
			$list = array ();
			$date_arr = $json_ok->{'events'} [$i]->{'timings'}; // dates des événements
			for($j = 0; $j < count ( $date_arr ); $j ++) {
				$start = $json_ok->{'events'} [$i]->{'timings'} [$j]->{'start'};
				$end = $json_ok->{'events'} [$i]->{'timings'} [$j]->{'end'};
				$sta_dat = new DateTime ( $start ); // objets date
				$end_dat = new DateTime ( $end );
				$today = new DateTime ();
				if ($sta_dat < $today) { // comparaison des dates
					if ($end_dat > $today) {
						$list [] = $json_ok->{'events'} [$i]->{'uid'};
						$list [] = $json_ok->{'events'} [$i]->{'title'}->{'fr'};
						$list [] = $json_ok->{'events'} [$i]->{'location'}->{'uid'};
						$list [] = $json_ok->{'events'} [$i]->{'location'}->{'name'};
						$list [] = $json_ok->{'events'} [$i]->{'timings'} [$j]->{'start'};
						$list [] = $json_ok->{'events'} [$i]->{'timings'} [$j]->{'end'};
						$tableau [] = $list;
						$trouve = true;
						break;
					}
				}
			}
		}
		if ($trouve) {
			return ($tableau);
		} else {
			return ("no event found");
		}
	}
}
