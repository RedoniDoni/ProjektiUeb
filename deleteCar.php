<?php
include_once 'CarRepository.php';
$id = $_GET['Id'];

$strep = new CarRepository();
$strep->deleteCar($id);

header("location:cars.php");


?>
