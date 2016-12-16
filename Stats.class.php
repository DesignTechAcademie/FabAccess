
<?php

class stat{


    public function __construct($_date,$id_Equip)
        {
            $date = date("dmY");
            $this ->_fichier = $_date.$_datedebut.$_datefin;
        }

    /* L'accès aux informations a-t-il échoué ? */
      if (!$stat) {
      } else {
    /*
     * Nous voulons que la date et heure d'accès soit d'une
     * semaine après la date courante.
     */
          $atime = $stat['atime'] + 604800;
    /* Touchons le fichier ! */
      if(!touch('', time(), $atime)) {
        echo 'Échec lors de l\'appel à la fonction touch()...';
      } else {
        echo 'L\'appel à touch() a réussi...';
      }
    }
  }



  public function get-data ($datedebut,$datefin,$id_Equi = null,.. ){
    $this ->_id_Equip = $date.$datedebut.$datefin;
}

    public function lire($données)
  {
    if($id_Equip)
    {echo "ok";

    }else {
    echo "erreur";
    {


  $_fichier =  fopen('');
               fgets($_fichier);
               fclose($_fichier);

              //variable voir<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> si la date est entre la date de début et de fin la lire closed
              //sinon continuer de lire le fichier
            if($date)
             {($datedebut<$datedefin)
               echo "ok";
            }else {
                echo "continuer de lire le fichier";
             {
  }
        return $data;//Json

public get-data-graph ($datedebut, $datefin){
        $data=this->get-data();
        return $img;
  }

public get-data-table ($dd,$df){



  //données factices
  //echo 'Nom : ', $identite['nom'] ,'<br/>';
    echo 'datedebut : ', $id_date_debut['date début'] ,'<br/>';
    echo 'lieu : ', $id_lieu ['lieu'] ,'<br/>';
    echo 'Animation : ', $id_animation ['animation'] ,'<br/>';
    echo 'datefin : ', $id_datefin ['datefin'];'<br/>';
  //
  }
 }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>tableau</title>
    <link rel="stylesheet" href="Stats.class.css" />
  </head>

    <body>
    <table border="1px">
          <td>&&&&&</td>
          <td>Cumul</td>
          <td>Moyenne</td>
          <td>Ratio</td>
    </table>
  </body>
    </html>
