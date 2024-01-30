<?php
include_once 'CompanyRepository.php';
$id = $_GET['id'];//e merr id prej url

$strep = new CompanyRepository();
$strep->deleteCompany($id);

header("location:companys.php");
?>