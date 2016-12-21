<?php

/**
 * Created by PhpStorm.
 * User: Christophe / Yacine
 * Date: 21/12/16
 * Time: 08:45
 */
require("FichierCSV.class.php");
class Message
{

private $_IDmessages; // le numéro du message
private $_messages; // le message
private $_IDuser; // le destinataire
private $_dateConfirm; // la date de confirmation de lecture du message

    public function __construct()
    {

    }

    public function enregistrerMessages($text,$user)
    {
        $Message = new FichierCSV("Message");

        if($Message->write_csv($text))
        {
            return "OK";
        }
        else
        {
            return "(Error):Erreur lors de la création du message";
        }


    }

    public function getMessages($user)
    {

    }

    public function  getAllMessage()
    {

    }


    public function confirmeMessages($IDMessage)
    {


    }
}