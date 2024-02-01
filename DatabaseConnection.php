<?php
    class DatabaseConnection{  
        private $server = "127.0.0.1";
        private $username = "root";
        private $password = "";
        private $database = "projekti";

        function startConnection(){
            try{
                $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if(!$conn){
                    //echo "Connection failed!";
                    return null;
                }
                else{
                    //echo "Connection successful!";
                    return $conn;
                }
            }catch(PDOException $e){
                echo "Connection failed!".$e->getMessage();
                return null;
            }
        }
    }
    //$db = new DatabaseConnection();
    //$db->startConnection();
?>