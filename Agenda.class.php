<?php
  /**
   * Manipulation du fichier JSON de openagenda
   * renvoie une chaine si erreur ou pas d'événement
   * renvoie un tableau avec trois données de l'événement :
   * uid, titre, lieu
   */
  class Agenda{

    public function get(){
      $list = array();
      $mesevents = file_get_contents("https://openagenda.com/agendas/61707059/events.json?");
      //$monfichier = new Fichier("","events",".json");
      //$mestrucs = $monfichier->lire();

      $json_ok = json_decode($mesevents);
      if (json_last_error() != 0){ return ("Json error : ".json_last_error());}

      $number = $json_ok->{'total'};
      for ($i=0; $i < $number; $i++) {
        $date_arr = $json_ok->{'events'}[$i]->{'timings'};
        for ($j=0; $j < count($date_arr); $j++) {
          $start = $json_ok->{'events'}[$i]->{'timings'}[$j]->{'start'};
          $end = $json_ok->{'events'}[$i]->{'timings'}[$j]->{'end'};
          $sta_dat = new DateTime($start);
          $end_dat = new DateTime($end);
          $today = new DateTime();
          if ($sta_dat < $today){
            if ($end_dat > $today){
              $list[] = $json_ok->{'events'}[$i]->{'uid'};
              $list[] = $json_ok->{'events'}[$i]->{'title'}->{'fr'};
              $list[] = $json_ok->{'events'}[$i]->{'location'}->{'name'};
              return ($list);
            }
          }
        }
      }
      return ("no event found");
    }

  }
