<?php
class Produkti{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Foto;
    private $Marka;
    private $Modeli;
    private $Viti;
    private $Kilometra;

    public function __construct($f, $ma, $mo, $v, $k){
        $this->Foto=$f;
        $this->Marka=$ma;
        $this->Modeli=$mo;
        $this->Viti=$v;
        $this->Kilometra=$k;
    }
    
    public function getFoto(){
        return $this->Foto;
    }
    public function setFoto($f){
        $this->Foto = $f;
    }

    public function getMarka(){
        return $this->Marka;
    }
    public function setMarka($ma){
        $this->Marka = $ma;
    }

    public function getModeli(){
        return $this->Modeli;
    }
    public function setModeli($mo){
        $this->Modeli = $mo;
    }

    public function getViti(){
        return $this->Viti;
    }
    public function setViti($v){
        $this->Viti = $v;
    }

    public function getKilomettra(){
        return $this->Kilometra;
    }
    public function setKilometra($k){
        $this->Kilometra = $k;
    }

    public function getNiveliIStudimeve(){
        return $this->NiveliIStudimeve;
    }
    public function setNiveliIStudimeve($e){
        $this->NiveliIStudimeve = $e;
    }

    public function __toString(){
        return "Marka: ".$this->Marka." dhe modeli".$this->Modeli;
    }
}
?>