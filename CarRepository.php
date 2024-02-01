<?php
    include_once('DatabaseConnection.php');

    class CarRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }


        public function insertCar($vetura){
            $conn = $this->connection;

            $foto = $vetura->getFoto();
            $shenim = $vetura->getShenim();
            $sql = "INSERT INTO vetura(Foto, Shenim) VALUES (?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto, $shenim]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllCars(){
            $conn = $this->connection;

            $sql = "SELECT * FROM vetura";
            $statement = $conn->query($sql);

            $cars = $statement->fetchAll();
            return $cars;
        }


        public function editCar($id, $foto, $shenim){
            $conn = $this->connection;
            $sql = "UPDATE vetura SET Foto=?,Shenim=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto, $shenim, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }


        function deleteCar($id){
            $conn = $this->connection;

            $sql = "DELETE FROM vetura WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }


        function getCarById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM vetura WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $vetura=$statement->fetch();

            return $car;
        }

    }

?>