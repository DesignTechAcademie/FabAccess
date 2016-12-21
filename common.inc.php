<?php
/**
 * Ce fichier contient des petites fonctions utilisées de manière globale dans tout le projet
 */



/**
 * Vérifie si une variable est une chaine de caractère qui commence par "[Error]"
 * @author David Réchatin <david.rechatin@openscop.fr>
 */
function is_error($variable) {
    if (is_string($variable) && (substr($variable,0,7)=="[Error]" || substr($variable,0,7)=="[error]")) {
        return true;
    } else {
        return false;
    }
}