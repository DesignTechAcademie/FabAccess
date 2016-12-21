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
    protected $_Infoid;
	

    /**
     * Bank constructor.
     * @param $cptp
     * @param $Infoid
     */
    public function __construct($cptp, $Infoid){
		$this->_Cptp = $cptp;
		$this->_Infoid = $Infoid;
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
    private function getInfoid(){
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
