<?php
    
    include 'header.php';
    include_once 'Useri.php';
    include_once 'UserRepository.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if(empty($emri) || empty($mbiemri) || empty($email) 
        || empty($password) || empty($role)){
            echo '<script>alert("Fill all fields!");</script>';
        }
        else{
            if(isset($_SESSION['id'])){
                $id = $_SESSION['id'];
                $userRepository = new UserRepository();
                $user = $userRepository->getUserById($id);
                $user = new User(null, $emri, $mbiemri, $email, $password, $role);
                $userRepository = new UserRepository();
                $userRepository -> insertUser($user);
                echo "<script>alert('User added successfully!');</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="InsertCompany.css">
</head>
<body>
  <main>
    <fieldset>
        <h1>Insert User</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="form-group">
                <label>Emri:</label>
                    <input type="text" name="emri">
                </div>

                <div class="form-group">
                    <label>Mbiemri:</label>
                    <input type="text" name="mbiemri">
                </div>

                <div class="form-group">
                <label>Email:</label>
                    <input type="text" name="email">
                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="password">
                </div>

                <div class="form-group">
                    <label>Role:</label>
                    <input type="text" name="role">
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
