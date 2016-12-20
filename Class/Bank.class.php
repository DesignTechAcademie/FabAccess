<?php

/**
 * @author Alexandre LEHE <alex.lehe@hotmail.com >
 */    
 
class Bank {
    /**
     * @var
     */
    protected $_Cptp;
    /**
     * @var
     */
    protected $_Tarif;
    /**
     * @var
     */
    protected $_Infoid;
	

    /**
     * Bank constructor.
     * @param $cptp
     * @param $tarif
     * @param $infoid
     */
    public function __construct($cptp, $tarif, $infoid){
		$this->_Cptp = $cptp;
		$this->_Tarif = $tarif;
		$this->_Infoid = $infoid;
	}


    /**
     * @return mixed
     */
    public function getCptp(){
		return $this->_Cptp;
	}


    /**
     * @return mixed
     */
    public function getTarif(){
		return $this->_Tarif;
	}


    /**
     * @return mixed
     */
    private function getId(){
		return $this->_Infoid;
	}
	




    /**
     * @return string
     */
    public function lireCptp(){
		$file = fopen($this->_Cptp,"r");
		$contenu = "";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}

    /**
     * @param $contenu
     */
    public function ecrireCptp($contenu){
		$file = fopen($this->_Cptp,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	



    /**
     * @return string
     */
    public function lireTarif(){
		$file = fopen($this->_Tarif,"r");
		$contenu = "";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}

    /**
     * @param $contenu
     */
    public function ecrireTarif($contenu){
		$file = fopen($this->_Tarif,"w");
		fputs($file,$contenu);
		fclose($file);
	}
	


    /**
     * @return string
     */
    public function lireInfo(){
		$file = fopen($this->_Infoid,"r");
		$contenu = "";
		while($line=fgets($file)){
			$contenu .= $line;
		}
		fclose($file);
		return $contenu;
	}

    /**
     * @param $contenu
     */
    public function ecrireInfo($contenu){
		$file = fopen($this->_Infoid,"w");
		fputs($file,$contenu);
		fclose($file);
	}




	}
