<?php
include 'header.php';
include 'CompanyRepository.php';
include_once 'UserRepository.php';
    
$companyid = isset($_GET['id']) ? $_GET['id'] : null;
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

$userRepository = new UserRepository();
$user = $userRepository->getUserById($id);

if($companyid !== null){
    $companyRepository = new CompanyRepository();
    $company = $companyRepository->getCompanyById($companyid);
} 
if(isset($_POST['edit'])){
    $id = $companyid;
    $foto = $_POST['foto'];
    $shenim = $_POST['shenim'];
    $createdBy = $company['createdBy'];

    $companyRepository->editCompany($id, $foto, $shenim, $createdBy, $user['emri']);
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
  <main>
    <fieldset>
        <h1>Edit company</h1>
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Foto:</label>
                    <input type="text" name="foto"  value="<?php echo $company['Foto']; ?>">
                </div>

                <div class="form-group">
                    <label>Shenim:</label>
                    <input type="text" name="shenim"  value="<?php echo $company['Shenim']; ?>">
                </div>

                <div class="butoniSave">
                    <button type="submit" name="edit" class="saveButton">Save</button>
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
