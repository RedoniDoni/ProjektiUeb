<?php
class User{
    private $Id; 
    private $Emri;
    private $Mbiemri;
    private $Emaili;
    private $Passwordi;
    private $Roli;

    public function __construct($e, $m, $em, $p, $r){
        $this->Emri=$e;
        $this->Mbiemri=$m;
        $this->Emaili=$em;
        $this->Passwordi=$p;
        $this->Roli =$r;
    }
    
    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($e){
        $this->Emri = $e;
    }

    public function getMbiemri(){
        return $this->Mbiemri;
    }
    public function setMbiemri($e){
        $this->Mbiemri = $e;
    }

    public function getEmaili(){
        return $this->Emaili;
    }
    public function setEmaili($e){
        $this->Emaili = $e;
    }

    public function getPasswordi(){
        return $this->Passwordi;
    }
    public function setPasswordi($e){
        $this->Roli = $r;
    }

    public function getRoli(){
        return $this->Roli;
    }
    public function setRoli($e){
        $this->Roli = $r;
    }
    public function __toString(){
        return "Emri: ".$this->Emri." dhe mbiemri ".$this->Mbiemri;
    }
}
?>