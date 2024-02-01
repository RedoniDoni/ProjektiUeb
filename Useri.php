<?php
class User{
    private $id; 
    private $emri;
    private $mbiemri;
    private $email;
    private $pasword;
    private $role;
    
    public function __construct($id, $emri, $mbiemri, $email, $password, $role) {
        $this->id = $id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
        
    public function getId() {
        return $this->id;
    }

    public function getEmri() {
        return $this->emri;
    }

    public function getMbiemri() {
        return $this->mbiemri;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEmri($emri) {
        $this->emri = $emri;
    }

    public function setMbiemri($mbiemri) {
        $this->mbiemri = $mbiemri;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRole($role) {
        $this->role = $role;
    }
}
?>
