<?php
  /**
   * Manipulation de fichier CSV avec la classe Fichier.class.php
   */
  class FichierCSV extends Fichier{

    public function __construct($chemin,$nom){
      parent::__construct($chemin,$nom,".csv");
    }

    public function write_csv($list){
      $contenu = "";
      foreach ($list as $value) {
        $contenu .= $value.";";
      }
      $contenu = substr($contenu,0,-1);
      $contenu .= "\n";
      $this->ecrire($contenu);
    }

    public function read_id_0($id){   // cherche d'un ID dans la 1ere colonne d'un fichier csv
      if (ctype_digit($id) && $id != ""){
        $contenu = $this->lire_array();
        foreach ($contenu as $value) {
          $list = explode(";",$value);
          if ($id == $list[0]){
            return ($list);           // retour de la ligne chechée sous forme de liste
          }
        }
        return ("not found");
      }
      return 0;
    }

    public function search_item($item){ // recherche d'un item dans le fichier csv
      if ( $item != ""){
        $contenu = $this->lire_array();
        foreach ($contenu as $value) {
          $list = explode(";",$value);
          foreach ($list as $value) {
            if ($item == $value){     //  retour de la 1ère ligne trouvée
              return ($list);         //  de l'item cherchée sous forme de liste
            }
          }
        }
        return ("not found");
      }
      return 0;
    }

    public function search_datas($item){ // recherche d'un item dans le fichier csv
      $tableau = array();
      $trouve = 0;
      if ( $item != ""){
        $contenu = $this->lire_array();
        foreach ($contenu as $value) {
          $list = explode(";",$value);   // ligne en tableau
          foreach ($list as $value) {    // chaque élément de la ligne
            if ($item == $value){
              $trouve ++;                //  mémorisation de la ligne trouvée
              $tableau[] = $list;        //  de l'item cherchée sous forme de liste
            }
          }
        }
        if ($trouve != 0){ return ($tableau);}
        return ("not found");
      }
      return 0;
    }
}

?>
