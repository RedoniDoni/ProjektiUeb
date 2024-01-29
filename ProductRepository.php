<?php
    include_once('DatabaseConnection.php');

    class ProductRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
        


        public function insertProduct($produkti){
            $conn = $this->connection;
            
            $foto = $produkti->getFoto();
            $marka = $produkti->getMarka();
            $modeli = $produkti->getModeli();
            $viti = $produkti->getViti();
            $kilometra = $produkti->getKilometra();

            $sql = "INSERT INTO prudukti(Foto, Marka, Modeli, Viti, Kilometra) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto, $marka, $modeli, $viti ,$kilometra]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllProducts(){
            $conn = $this->connection;

            $sql = "SELECT * FROM products";
            $statement = $conn->query($sql);

            $students = $statement->fetchAll();
            return $products;
        }


        
        public function editProduct($id, $foto, $marka, $modeli, $viti, $kilometra){
            $conn = $this->connection;
            $sql = "UPDATE produkti SET Foto=?,Marka=?, Modeli=?, Viti=?,Kilometra=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$foto,$marka, $modeli, $viti, $kilometra, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }


        function deleteProduct($id){
            $conn = $this->connection;

            $sql = "DELETE FROM produkti WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }


        function getProductById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM produkti WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $student=$statement->fetch();

            return $product;
        }

    }

?>