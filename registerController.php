<?php
include_once 'Projekti Ueb/repository/userRepository.php';
include_once 'Projekti Ueb/models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);

        $user  = new User($id,$name,$surname,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}



?>