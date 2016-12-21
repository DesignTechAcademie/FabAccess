<?php

/**
 * Created by PhpStorm.
 * User: Christophe / Yacine
 * Date: 21/12/16
 * Time: 08:45
 */

class Message
{
    private $_dateEnvoie;
    private $_idMessage;

    public function __construct()
    {
        $this->_dateEnvoie = date(j."/".m."/".Y.",".H.":".i);
        $this->_idMessage = $_POST[id];
    }

    public function enregistrerMessages($text,$user)
    {
        $separ = ";";
        $saut = "\n";
        $file = fopen("Message.csv","a+");
        fputs($file, $this->idMessage.$separ);
        fputs($file, $user.$separ);
        fputs($file, $text.$separ);
        fputs($file, $this->_dateEnvoie.$separ.$saut);
        fclose($file);
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