
<?php
include 'CompanyRepository.php';
$id = $_GET['Id'];

$strep = new CompanyRepository();
$companys = $strep->getCompanyById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link rel="stylesheet" href="editCompany.css">
    <style>
      body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; 
}

fieldset {
    border: 2px solid #007acc;
    border-radius: 10px;
    padding: 25px;
    width: 100%;
    max-width: 600px;
    max-height: 400px;
    border-style: dashed;
}

h1 {
    text-align: center;
    color: #007acc;
    margin-bottom: 20px; 
}

.container {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    color: #007acc;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #007acc;
    border-radius: 15px;
}

.butoniSave {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.saveButton {
    background-color: #007acc;
    color: #fff;
    font-weight: 700;
    padding: 10px 20px;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    font-size: 16px;
}

.saveButton:hover {
    background-color: #00588f;
}


    </style>
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
    $id = $company['Id']; 
    $foto = $_POST['foto']; 
    $shenim = $_POST['shenim'];

    $strep->editCompany($id,$foto,$shenim);
    header("location:companys.php");
}

?>