
<?php
include 'CompanyRepository.php';
include_once 'UserRepository.php';
$id = $_GET['id'];

$strep = new CompanyRepository();
$companys = $strep->getCompanyById($id);


    
$companyid = isset($_GET['id']) ? $_GET['id'] : null;
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

$userRepository = new UserRepository();
$user = $userRepository->getUserById($id);

if($companyid !== null){
    $companyRepository = new CompanyRepository();
    $company = $companyRepository->getCompanyById($companyid);
} 
else{
    echo "Error: Id is not set in the URL!";
}
if(isset($_POST['edit'])){
    $id = $companyid;
    $foto = $_POST['Foto'];
    $shenim = $_POST['Shenim'];
    $createdBy = $ticket['createdBy'];

    $ticketsRepository->updateCompany($id, $foto, $shenim, $createdBy, $user['fullName']);
    echo "<script> alert('Update was successful!'); 
    window.location = 'companys.php';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link rel="stylesheet" href="InsertCompany.css">
</head>
<body>
<?php
        include 'header.php';
    ?>
  <main>
    <fieldset>
        <h1>Edit company</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="form-group">
                    <label>Foto:</label>
                    <input type="text" name="foto"  value="<?php echo $company['Foto']?>">
                </div>

                <div class="form-group">
                    <label>Shenim:</label>
                    <input type="text" name="shenim"  value="<?php echo $company['Shenim']?>">
                </div>

                <div class="butoniSave">
                    <button type="submit" name="submit" class="saveButton">Save</button>
                </div>
            </form>
        </div>
    </fieldset>
    </main> 
    <?php
        include 'footer.php';
    ?>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $company['id']; 
    $foto = $_POST['foto']; 
    $shenim = $_POST['shenim'];

    $strep->editCompany($id,$foto,$shenim);
    header("location:companys.php");
}

?>