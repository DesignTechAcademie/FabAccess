<?php
/** 
 * Exemple de fichier de configuration pour accès à Dolibarr en REST
 * 
 * @author Julien Theze <julien.theze@gmail.com>
 */

/**
 * @const API_URL	début de l'URL d'API Dolibarr
 * @const API_KEY	clé d'API fournie par Dolibarr
 * @const OPENAGENDA_URL	accès aux événements programmés
 */
define('API_URL',"http://...");
define('API_KEY',"?api_key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
define('OPENAGENDA_URL',"https://openagenda.com/agendas/61707059/events.json?");
define('SUBFOLDER','/FabAccess'); // sans le slash final, ET si vous n'uilisez pas un serveur web, donnez le chemin d'accès complet au répertoire du projet



if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']<>"") {
    define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']); // absolute path of apache DOCUMENT_ROOT '/'
}
define('PATH_ROOT', DOC_ROOT.SUBFOLDER); // absolute path of html files on the server without final '/'
define('PATH_DATA', PATH_ROOT.'/Datas/'); // absolute path of data files on the server with final '/'

?>
