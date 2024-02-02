<?php
include_once 'HistoryRepository.php';
$id = $_GET['ID'];

$strep = new HistoryRepository();
$strep->deleteHistory($id);

header("location:historys.php");


?>
