<?php
include_once 'Useri.php';
include_once 'UserRepository.php';
include_once 'DatabaseConnection.php'; 




  if(isset($_POST['loginbtn'])){
    if(empty($_POST['emailInput']) || empty($_POST['passwordInput'])){
      echo "Please fill the required fields!";
    }else{
        $emaili = $_POST['emailInput'];
        $passwordi = $_POST['passwordInput'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['email'] == $emaili && $user['password'] == $passwordi){
            session_start();
      
            $_SESSION['emailInput'] = $emaili;
            $_SESSION['passwordInput'] = $passwordi;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:Home.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }

  
  if(isset($_POST['registerBtn'])){
    if(empty($_POST['emriInput']) || empty($_POST['mbiemriInput']) || empty($_POST['emailInput']) ||
    empty($_POST['passwordInput'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['emriInput'];
        $surname = $_POST['mbiemriInput'];
        $emaili = $_POST['emailInput'];
        $passwordi = $_POST['passwordInput'];
        $id = $username.rand(100,999);

        $user  = new User($id,$name,$surname,$emaili,$passwordi);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
  }
?>