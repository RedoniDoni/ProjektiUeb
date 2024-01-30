
<?php
include 'CompanyRepository.php';
$id = $_GET['id'];

$strep = new CompanyRepository();
$company = $strep->getCompanyById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit Company</h3>
    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="foto"  value="<?php echo $company['Foto']?>"> <br> <br> 
        <input type="text" name="shenim"  value="<?php echo $company['Shenim']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $company['Id']; 
    $foto = $_POST['foto']; 
    $shenim = $_POST['shenim'];

    $strep->editCompany($id,$foto,$shenim);
    header("location:companys.php");
}

?>