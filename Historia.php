<?php
class Historia{
    private $Id; 
    private $Pershkrimi;
    private $Vitet;
    private $NrVetura;
    private $NrQira;
    private $Vleresimi;
    private $Para;
    private $Shpenzime;
    private $Fitim;

    public function __construct($id,$pe, $vi, $nv, $nq, $vl, $pa, $sh, $f){
        $this->Id=$id;
        $this->Pershkrimi=$pe;
        $this->Vitet=$vi;
        $this->NrVetura=$nv;
        $this->NrQira=$nq;
        $this->Vleresimi=$vl;
        $this->Para=$pa;
        $this->Shpenzime=$sh;
        $this->Fitim=$f;
    }
    public function getId(){
        return $this->Id;
    }
    public function getPershkrimi(){
        return $this->Pershkrimi;
    }
    public function setPershkrimi($pe){
        $this->Pershkrimi = $pe;
    }

    public function getVitet(){
        return $this->Vitet;
    }
    public function setVitet($vi){
        $this->Vitet = $vi;
    }

    public function getNrVetura(){
        return $this->NrVetura;
    }
    public function setNrVetura($nv){
        $this->NrVetura = $nv;
    }

    public function getNrQira(){
        return $this->NrQira;
    }
    public function setNrQira($nq){
        $this->NrQqira = $nq;
    }

    public function getVleresimi(){
        return $this->Vleresimi;
    }
    public function setVleresimi($vl){
        $this->Vleresimi = $vl;
    }

    public function getPara(){
        return $this->Para;
    }
    public function setPara($pa){
        $this->Para = $pa;
    }

    public function getShpenzime(){
        return $this->Shpenzime;
    }
    public function setShpenzime($sh){
        $this->Shpenzime = $sh;
    }

    public function getFitim(){
        return $this->Fitim;
    }
    public function setFitim($f){
        $this->Fitim = $f;
    }

    public function __toString(){
        return "Pershkrimi: ".$this->Pershkrimi." dhe Vitet ".$this->Vitet;
    }
}
?>