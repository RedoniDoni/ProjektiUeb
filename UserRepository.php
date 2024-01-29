<?php
    include_once('DatabaseConnection.php');

    class UserRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }


        public function insertUser($user){
            $conn = $this->connection;

            $emri = $user->getEmri();
            $mbiemri = $user->getMbiemri();
            $emaili = $user->getEmaili();
            $passwordi = $user->getPasswordi();
            $roli=$user->getRoli();

            $sql = "INSERT INTO useri(Emri, Mbiemri, Emaili, Passwordi, Roli) VALUES (?,?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $mbiemri, $emaili, $passwordi, $roli]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM user";
            $statement = $conn->query($sql);

            $users = $statement->fetchAll();
            return $users;
        }


        
        public function editUser($id, $emri, $mbiemri, $emaili, $passwordi, $roli){
            $conn = $this->connection;
            $sql = "UPDATE useri SET Emri=?,Mbiemri=?, Emaili=?, Passwordi=?,Roli=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri,$mbiemri, $emaili,$passwordi, $roli, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        function deleteUser($id){
            $conn = $this->connection;

            $sql = "DELETE FROM user WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        function getUserById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM user WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $student=$statement->fetch();

            return $user;
        }

    }

?>