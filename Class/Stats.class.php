
<?php
// autor patricia
 class stat{

    public function __construct($Equip) {

          	$this ->_fichier =$date;
      /* L'accès aux informations a-t-il échoué ? */
        if (!$stat) {
             echo 'L\'appel à stat() a échoué...';
           } else {
     /*
      * Nous voulons que la date et heure d'accès soit d'une
      * semaine après la date courante.
      */
           $atime = $stat['atime'] + 604800;
           }
    }
     /* Touchons le fichier ! */
    public function touch ($time){
     	if(!touch('', time(), $atime)) {
         echo 'Échec lors de l\'appel à la fonction touch()...';
       } else {
         echo 'L\'appel à touch() a réussi . ';
       }
    }

    public function getdata ($date_debut,$date_fin,$id_Equi = null){

     $this -> id_Equip = $date.$datedebut.$datefin;
     $list = [$id_Equip,$id_user,$date_deb,$date_fin,$lieu,$event];
     $myfile->write_csv($list);
     return ("ok");{

     if($id_Equip){
     	echo "ok";
     }else {
     echo "erreur";
      }
     }
   }

    public function getArray($date_debut,$date_fin,$id_Equi) {

     	//Un tableau existant peut être modifié en y assignant explicitement des valeurs.
     	//L'assignation d'une valeur dans un tableau est effectué en spécifiant la clé, entre crochets. La clé peut également ne pas être renseignée, sous la forme : [].

     	$arr[clé] = valeur;
     	$arr[] = valeur;

     	error_reporting(E_ALL);
     	ini_set('display_errors', true);
     	ini_set('html_errors', false);

     	// Tableau simple :

     	$array = array(1, 2);
     	$count = count($array);

     	for ($i = 0; $i < $count; $i++) {
     		echo "\nVérification de $i : \n";
     		echo "Mauvais : " . $array['$i'] . "\n";
     		echo "Bon : " . $array[$i] . "\n";

     	}
     	return array(1, 2, 3);

      }
 }

 ?>
