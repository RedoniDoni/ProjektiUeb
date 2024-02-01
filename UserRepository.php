<?php
    include_once('DatabaseConnection.php');

    class UserRepository{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUser($user){
            $conn = $this->connection;

            $emri = $user->getEmri();
            $mbiemri = $user->getMbiemri();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $role = $user->getRole();

            $sql = "INSERT INTO user(emri, mbiemri, email, password, role) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $mbiemri, $email, $password, $role]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM user";
            $statement = $conn->query($sql);

            $users = $statement->fetchAll();
            return $users;
        }

        
        public function editUser($id, $emri, $mbiemri, $email, $password, $role){
            $conn = $this->connection;
            $sql = "UPDATE user SET emir=?,mbiemri=?, email=?, password=?,role=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $mbiemri, $email, $password, $role, $id]);

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
            $user = $statement->fetch();

            return $user;
        }

    }

?>
