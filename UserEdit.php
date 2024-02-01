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
    <link rel="stylesheet" href="editUser.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
   <main>
    <h3>Edit User</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     
        <input type="text" name="emri"  value="<?php echo $user['emri']?>"> <br> <br> 
        <input type="text" name="mbiemri"  value="<?php echo $user['mbiemri']?>"> <br> <br>
        <input type="text" name="email"  value="<?php echo $user['email']?>"> <br> <br>
        <input type="text" name="password"  value="<?php echo $user['password']?>"> <br> <br>
        <input type="text" name="role"  value="<?php echo $user['role']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
