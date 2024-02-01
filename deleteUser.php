<?php
include_once 'UserRepository.php';
$id = $_GET['id'];

$strep = new UserRepository();
$strep->deleteUser($id);

header("location:users.php");
?>