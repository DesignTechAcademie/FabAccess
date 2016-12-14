<?php
  /**
   * Manipulation de fichier CSV avec la clasee Fichier.class.php
   */
  class FichierCSV extends Fichier{

    public function __construct($chemin,$nom){
      parent::__construct($chemin,$nom,".csv");
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
            if ($item == $value){
              return ($list);         // retour de la ligne chechée sous forme de liste
            }
          }
        }
        return ("not found");
      }
      return 0;
    }
}

?>
