<?php
    include_once('DatabaseConnection.php');

    class CompanyRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();

            if (!$this->connection) {
                throw new Exception("Database connection failed.");
            }
        }


        public function insertCompany($kompania){
            $conn = $this->connection;

            $foto = $kompania->getFoto();
            $shenim = $kompania->getShenim();
            $sql = "INSERT INTO kompania(Foto, Shenim, createdBy, modifiedBy) VALUES (?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto, $shenim, createdBy, modifiedBy]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }


        public function getAllCompanys(){
            $conn = $this->connection;

            $sql = "SELECT * FROM kompania";
            $statement = $conn->query($sql);

            $companys = $statement->fetchAll();
            return $companys;
        }


        
        public function editCompany($id, $foto, $shenim){
            $conn = $this->connection;
            $sql = "UPDATE kompania SET Foto=?,Shenim=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto, $shenim, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }


        function deleteCompany($id){
            $conn = $this->connection;

            $sql = "DELETE FROM kompania WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }


        function getCompanyById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM kompania WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $kompania=$statement->fetch();

            return $kompania;
        }
        function updateCompany($id, $foto, $shenim, $createdBy, $modifiedBy){
            $conn = $this->connection;
            $sql = "UPDATE kompania SET Foto=?, Shenim=?, createdBy=?, modifiedBy=?  WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto, $shenim, $createdBy, $modifiedBy, $id]);


        }
    }

?>