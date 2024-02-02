<?php
class Cmimi{
    private $id; 
    private $pershkrimi;
    private $marka;
    private $modeli; 
    private $viti;
    private $kilometra;
    private $shpenzime; 
    private $sigurimi;
    private $cmimio;
    private $cmimid; 
    private $cmimij;
    private $cmimim;

    public function __construct($i, $p, $ma, $mo, $v, $k, $sh, $si, $co, $cd, $cj, $cm){
        $this->id=$i;
        $this->pershkrimi=$p;
        $this->marka=$ma;
        $this->modeli=$mo;
        $this->viti=$v;
        $this->kilometra=$k;
        $this->shpenzime=$sh;
        $this->sigurimi=$si;
        $this->cmimio=$co;
        $this->cmimid=$cd;
        $this->cmimij=$cj;
        $this->cmimim=$cm;
    }
    public function getId(){
        return $this->id;
    }
    public function getPershkrimi(){
        return $this->pershkrimi;
    }
    public function setPershkrimi($p){
        $this->pershkrimi = $p;
    }

    public function getMarka(){
        return $this->marka;
    }
    public function setMarka($ma){
        $this->marka = $ma;
    }
    public function getModeli(){
        return $this->modeli;
    }
    public function setModeli($mo){
        $this->modeli = $mo;
    }

    public function getViti(){
        return $this->viti;
    }
    public function setViti($v){
        $this->viti = $v;
    }

    public function getKilometra(){
        return $this->kilometra;
    }
    public function setKilometra($k){
        $this->kilometra = $k;
    }

    public function getShpenzime(){
        return $this->shpenzime;
    }
    public function setShpenzime($sh){
        $this->shpenzime = $sh;
    }

    public function getCmimio(){
        return $this->cmimio;
    }
    public function setCmimio($co){
        $this->cmimio = $co;
    }

    public function getCmimid(){
        return $this->cmimid;
    }
    public function setCmimid($cd){
        $this->cmimid = $cd;
    }

    public function getCmimij(){
        return $this->cmimij;
    }
    public function setCmimij($cj){
        $this->cmimij = $cj;
    }

    public function getCmimim(){
        return $this->cmimim;
    }
    public function setCmimim($cm){
        $this->cmimim = $cm;
    }

}
?>