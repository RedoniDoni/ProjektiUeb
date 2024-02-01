<?php
    include_once('DatabaseConnection.php');

    class HistoryRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }


        public function insertHistory($historia){
            $conn = $this->connection;

            $pershkrimi = $historia->getPershkrimi();
            $vitet = $historia->getVitet();
            $nrvetura = $historia->getNrVetura();
            $nrqira = $historia->getNrQira();
            $vleresimi=$historia->getVleresimi();
            $para = $historia->getPara();
            $shpenzime = $historia->getShpenzime();
            $fitim = $historia->getFitim();
            $sql = "INSERT INTO historia(Pershkrimi, Vitet, NrVetura, NrQira,Vleresimi,Para,Shpenzime,Fitim) VALUES (?,?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$pershkrimi, $vitet, $nrvetura, $nrqira,$vleresimi, $para, $shpenzime, $fitim]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllHistorys(){
            $conn = $this->connection;

            $sql = "SELECT * FROM historia";
            $statement = $conn->query($sql);

            $students = $statement->fetchAll();
            return $students;
        }


        
        public function editStudent($id, $pershkrimi, $vitet, $nrvetura, $nrqira,$vleresimi, $para, $shpenzime, $fitim){
            $conn = $this->connection;
            $sql = "UPDATE historia SET Pershkrimi=?,Vitet=?, NrVetura=?, NrQira=?,Vleresimi=?,Para=?,Shpenzime=?,Fitim=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$pershkrimi, $vitet, $nrvetura, $nrqira,$vleresimi, $para, $shpenzime, $fitim, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        

        function deleteHistory($id){
            $conn = $this->connection;

            $sql = "DELETE FROM historia WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        

        function getHistoryById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM historia WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $student=$statement->fetch();

            return $history;
        }

    }

?>