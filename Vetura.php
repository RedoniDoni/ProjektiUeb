<?php
class Vetura{
    private $Id; 
    private $Foto;
    private $Shenim;

    public function __construct($id,$f, $sh){
        $this->Id=$id;
        $this->Foto=$f;
        $this->Shenim=$sh;
    }
    public function getId(){
        return $this->Id;
    }
    public function getFoto(){
        return $this->Foto;
    }
    public function setFoto($f){
        $this->Foto = $f;
    }

    public function getShenim(){
        return $this->Shenim;
    }
    public function setShenim($sh){
        $this->Shenim = $sh;
    }

    public function __toString(){
        return "Foto: ".$this->Foto." dhe Shenim ".$this->Shenim;
    }
}
?>