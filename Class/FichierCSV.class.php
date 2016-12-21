<?php

/**
 * @author Christian Lopez <chris42.lopez@gmail.com>
 *
 * Manipulation de fichier CSV avec la classe Fichier.class.php
 */
class FichierCSV extends Fichier
{
    /**
     * constructeur
     *
     * @param string $nom du fichier
     */
    public function __construct($nom)
    {
        parent::__construct(PATH_DATA, $nom, ".csv");
    }

    /**
     * ecrire à la suite dans un fichier csv
     *
     * @param array $list
     */
    public function write_csv($list)
    {
        $contenu = "";
        foreach ($list as $value) {
            $contenu .= $value . ";";
        }
        $contenu = substr($contenu, 0, -1);
        $contenu .= "\n";
        return $this->ecrire($contenu);
    }

    /**
     * recherche d'un ID en 1ere colonne d'un fichier
     * un seul ID dans le fichier ou le premier trouvé
     *
     * @param string $id
     * @return string[] liste des données de la ligne
     */
    public function read_id_0($id)
    { // cherche d'un ID dans la 1ere colonne d'un fichier csv
        if (ctype_digit($id) && $id != "") {
            $contenu = $this->lire_array();
            if (is_error($contenu)) {
                return ("[Error] Problème dans la lecture du fichier...<br>" . $contenu);
            } else {
                foreach ($contenu as $value) {
                    $list = explode(";", $value);
                    if ($id == $list [0]) {
                        return ($list); // retour de la ligne chechée sous forme de liste
                    }
                }
            }
            return ("[Error] Donnée non trouvée");
        }
        return 0;
    }

    /**
     * recherche d'un item dans un fichier
     * un seul item dans le fichier ou premier trouvé
     *
     * @param string $item
     * @return string|array si non trouvé|liste des données de la ligne
     */
    public function search_item($item)
    { // recherche d'un item dans le fichier csv
        if ($item != "") {
            $contenu = $this->lire_array();
            foreach ($contenu as $value) {
                $list = explode(";", $value);
                foreach ($list as $value) {
                    if ($item == $value) { // retour de la 1ère ligne trouvée
                        return ($list); // de l'item cherchée sous forme de liste
                    }
                }
            }
            return ("not found");
        }
        return 0;
    }

    /**
     * recherche d'un item dans un fichier
     * toutes les lignes du fichier
     *
     * @param string $item
     * @return string|array si non trouvé|liste des données des lignes
     */
    public function search_datas($item)
    { // recherche d'un item dans le fichier csv
        $tableau = array();
        $trouve = 0;
        if ($item != "") {
            $contenu = $this->lire_array();
            foreach ($contenu as $value) {
                $list = explode(";", $value); // ligne en tableau
                foreach ($list as $value) { // chaque élément de la ligne
                    if ($item == $value) {
                        $trouve++; // mémorisation de la ligne trouvée
                        $tableau [] = $list; // de l'item cherchée sous forme de liste
                    }
                }
            }
            if ($trouve != 0) {
                return ($tableau);
            }
            return ("not found");
        }
        return 0;
    }

    /**
     * Renvoi toute les lignes d'un fichier CSV dans un tableau
     * @return array
     */
    public function getAll() {
        $result = $this->lire_array();
        if (is_error($result)) {
            return "[Error] Impossible de lire le fichier CSV <br>".$result;
        } else {
            return $result;
        }
    }
}

?>
