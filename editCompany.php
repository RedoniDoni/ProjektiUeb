
<?php
include 'CompanyRepository.php';
$id = $_GET['id'];

$strep = new CompanyRepository();
$companys = $strep->getCompanyById($id);


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