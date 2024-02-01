<?php
include 'userRepository.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$strep = new UserRepository();
$user = $strep->getUserById($id);

if(isset($_POST['editBtn'])){
    $userId = $id;
    $emri = $_POST['emri']; 
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $role = $_POST['role'];

    $strep->editUser($id,$emri,$mbiemri,$email,$password,$role);
    echo "<script> alert('Update was successful!'); 
        window.location = 'users.php';</script>";
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
    <h1>Edit User</h1>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
            <label>Emri:</label>
            <input type="text" name="emri"  value="<?php echo $user['emri']?>"> <br> <br> 
            </div>

            <div class="form-group">
            <label>Mbiemri:</label>
            <input type="text" name="mbiemri"  value="<?php echo $user['mbiemri']?>"> <br> <br>
            </div>

            <div class="form-group">
            <label>Emaili:</label>
            <input type="text" name="email"  value="<?php echo $user['email']?>"> <br> <br>
            </div>

            <div class="form-group">
            <label>Passwordi:</label>
            <input type="text" name="password"  value="<?php echo $user['password']?>"> <br> <br>
            </div>

            <div class="form-group">
            <label>Roli:</label>
            <input type="text" name="role"  value="<?php echo $user['role']?>"> <br> <br>
            </div>

            <div class="butoniSave">
            <input type="submit" name="editBtn" class ="saveButton" value="save"> <br> <br>
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
