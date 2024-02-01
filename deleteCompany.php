<?php
include_once 'CompanyRepository.php';
$id = $_GET['id'];

$strep = new CompanyRepository();
$strep->deleteCompany($id);

header("location:companys.php");
?>
