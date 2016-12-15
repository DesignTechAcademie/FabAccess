<?php
  /**
  * Enregistrement de l'utilisation des équipements
  * et recherche des données
  */
  require('Agenda.class.php');
  require('Fichier.class.php');
  require('FichierCSV.class.php');

  class Log{

    public function record($id_Equip,$id_user){
      $myfile = new FichierCSV("","Utilisation");
      $date_deb = date("c");
      $date_fin = "";
      //$lieu = equipement_lieu($id_Equip);

      $agenda = new Agenda();
      $result = $agenda->get();
      if (!is_array($result)){
        return ("error : ".$result);
      }else{
        $event = $result[1];
        $lieu = $result[2];
      }
      $list = [$id_Equip,$id_user,$date_deb,$date_fin,$lieu,$event];
      $myfile->write_csv($list);
      return ("ok");
    }

  }
?>
