<?php
/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 * 
 * Manipulation du fichier JSON de openagenda
 * renvoie une chaine si erreur ou pas d'événement
 * renvoie un tableau avec trois données de l'événement :
 * uid, titre, lieu
 */
class Agenda {
	public function get($lieu) {
		$list = array ();
		$mesevents = file_get_contents ( "https://openagenda.com/agendas/61707059/events.json?" ); // récupération du fichier Json
		// $monfichier = new Fichier("","events",".json");
		// $mestrucs = $monfichier->lire();
		
		$json_ok = json_decode ( $mesevents ); // construction de l'objet
		if (json_last_error () != 0) {
			return ("Json error : " . json_last_error ());
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
}
