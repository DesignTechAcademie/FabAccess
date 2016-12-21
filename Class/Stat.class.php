<?php

/**
 * Générateur de statisitiques
 */
class Stat
{

    /**
     * Crée un tableau php avec des fréquentations
     *
     * @param $date_debut (optionnel)
     * @param $date_fin (optionnel)
     * @param $id_equip (optionnel)
     * @return array
     */
    private function getFrequentationArray($date_debut = null, $date_fin = null, $id_equip = null)
    {
        $freqCSV = new FichierCSV ("Frequentation");
        $result = $freqCSV->getAll();
        if (is_error($result)) {
            return "[Error] Liste des fréquetations introuvable <br>" . $result;
        } else {
            return $result;
        }
    }

    /**
     * Crée un tableau HTML avec des fréquentations
     * @param $date_debut (optionnel)
     * @param $date_fin (optionnel)
     * @param $id_equip (optionnel)
     * @return string
     */
    public function getFrequentationTable($date_debut = null, $date_fin = null, $id_equip = null)
    {
        $frequentationArray = $this->getFrequentationArray($date_debut, $date_fin, $id_equip);
        if (is_error($frequentationArray)) {
            return "[Error] Impossible de générer le tableau <br>" . $frequentationArray;
        }

        $html = "<table class=\"table table-hover table-bordered\">";
        $html .= "<tr>
                    <th>Utilisateur</th>
                    <th>Date</th>
                    <th>Lieu</th>
                  </tr>";

        foreach ($frequentationArray as $ligne) {
            $html .= "<tr>";
            $ligne = explode(";", $ligne);
            // todo : les lignes suivantes doivent être réécrite pour instancier les objets utilisateurs et lieux afin d'afficher les noms à la place des id
            foreach ($ligne as $cellule) {
                $html .= "<td>";
                $html .= $cellule;
                $html .= "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "<table>";
        return $html;
    }


}