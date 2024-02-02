<?php
    include_once('DatabaseConnection.php');
    class PriceRepository{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertPrice($cmimi){
            $conn = $this->connection;

            $pershkrimi = $cmimi->getPershkrimi();
            $marka = $cmimi->getMarka();
            $modeli = $cmimi->getModeli();
            $viti = $cmimi->getViti();
            $kilometra = $cmimi->getKilometra();
            $shpenzime = $cmimi->getShpenzime();
            $sigurimi = $cmimi->getSigurimi();
            $cmimio = $cmimi->getCmimio();
            $cmimid = $cmimi->getCmimid();
            $cmimij = $cmimi->getCmimij();
            $cmimim = $cmimi->getCmimim();;

            $sql = "INSERT INTO cmimi(pershkrimi, marka, modeli, viti, kilometra, shpenzime, sigurimi, cmimio, cmimid, cmimij, 
            cmimim) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$pershkrimi, $marka, $modeli, $viti, $kilometra, $shpenzime, $sigurimi, $cmimio, $cmimid, $cmimij, 
            $cmimim]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllPrices(){
            $conn = $this->connection;

            $sql = "SELECT * FROM cmimi";
            $statement = $conn->query($sql);

            $prices = $statement->fetchAll();
            return $prices;
        }

        
        public function editPrice($id, $pershkrimi, $marka, $modeli, $viti, $kilometra, $shpenzime, $sigurimi, $cmimio, $cmimid, $cmimij, 
        $cmimim){
            $conn = $this->connection;
            $sql = "UPDATE cmimi SET pershkrimi=?, marka=?, modeli=?, viti=? kilometra=?, shpenzime=?, sigurimi=?, 
            cmimio=? cmimid=?, cmimij=?, cmimim=? WHERE id=?";
            $statement = $conn->prepare($sql);
            $statement->execute([ $pershkrimi, $marka, $modeli, $viti, $kilometra, $shpenzime, $sigurimi, $cmimio, $cmimid, $cmimij, 
            $cmimim, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        function deletePrice($id){
            $conn = $this->connection;

            $sql = "DELETE FROM cmimi WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        function getPriceById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM cmimi WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $cmimi=$statement->fetch();

            return $cmimi;
        }
    }

?>
