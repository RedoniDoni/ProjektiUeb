<?php
class Kompania{
    private $Id;
    private $Foto;
    private $Shenim;
    private $createdBy;
    private $modifiedBy;


    public function __construct($id,$f,$sh,$cB, $mB){
        $this->Id=$id;
        $this->Foto=$f;
        $this->Shenim=$sh;
        $this->createdBy=$cB;
        $this->modifiedBy=$mB;
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
    public function getCreatedBy(){
        return $this->createdBy;
    } 
    public function getModifiedBy(){
        return $this->modifiedBy;
    } 

    public function __toString(){
        return "Foto: ".$this->Foto." dhe Shenim ".$this->Shenim;
    }
}
?>