<?php

/**
 * Created by PhpStorm.
 * User: Christophe / Yacine
 * Date: 21/12/16
 * Time: 08:45
 */

/**
 * Class Message
 */
class Message
{
    /**
     * @var false|string
     */
    private $_dateEnvoie;
    /**
     * @var
     */
    private $_idMessage;

    /**
     * Message constructor.
     */
    public function __construct()
    {
        $this->_dateEnvoie = date(j."/".m."/".Y.",".H.":".i);
        $this->_idMessage = $_POST[id];
    }

    /**
     * @param $text
     * @param $user
     */
    public function enregistrerMessages($text, $user)
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

    /**
     * @param $user
     */
    public function getMessages($user)
    {

    }

    /**
     *
     */
    public function  getAllMessage()
    {

    }


    /**
     * @param $IDMessage
     */
    public function confirmeMessages($IDMessage)
    {


    }
}