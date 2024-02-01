
<?php
include 'userRepository.php';
$id = $_GET['Id'];

$strep = new UserRepository();
$user = $strep->getUserById($id);
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
<header>
    <div class="header-left">
      <div id="company-name">Rent a Car - RINAS</div>
    </div>
    <nav>
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Slider.php">Products</a></li>
        <li><a href="Prices.php">Prices</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="History.php">History</a></li>
        <li><a href="Dashboard.php" class="<?php echo $hide?>">Dashboard</a></li>
        <li><a href="LogInForm.php">Log Out</a></li>
      </ul>
    </nav>
    <div class="header-right">
      <div class="buttons">
        <a href="LogInForm.php"><button id="login-button">Log In / Sign Up</button></a>
      </div>
    </div>
  </header>
   <main>
    <h3>Edit User</h3>
    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">
     
        <input type="text" name="name"  value="<?php echo $company['name']?>"> <br> <br> 
        <input type="text" name="surname"  value="<?php echo $company['surname']?>"> <br> <br>
        <input type="text" name="emailInput"  value="<?php echo $company['email']?>"> <br> <br>
        <input type="text" name="passwordInput"  value="<?php echo $company['password']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
    </main>
    <footer>
    <div class="footer-left">
      <h1 style="color: black;"><b>RINAS COMPANY</b></h1>
      <p>Rinas Company is a rent a car company that has been operating perfectly for more than 20 years.</p>
    </div>

    <div class="footer-center">
      <div><p style="font-size: 20px;"><b>Contact Us</b></p></div>
      <div>
        <img src="location-icon.png" alt="Location Icon" width="32px" height="32px"/>
        Prishtine
      </div>
      <div>
        <img src="email-icon.png" alt="Email Icon" width="32px" height="32px"/>
        rinas.company@gmail.com 
      </div>
      <div>
        <img src="phone-icon.png" alt="Phone Icon" width="32px" height="32px"/>
        049 111 222
      </div>
    </div>

    <div class="footer-right">
      <p style="font-size: 20px;"><b>Visit Us</b></p>
      <div class="social-icons">
        <img src="instagram-icon.png" alt="Instagram Icon" width="40px" height="32px"/>
        <img src="facebook-icon.png" alt="Facebook Icon" width="40px" height="32px"/>
        <img src="twitter-icon.png" alt="Twitter Icon" width="40px" height="32px"/>
        <img src="youtube-icon.png" alt="YouTube Icon" width="40px" height="32px"/>
        <img src="snapchat-icon.png" alt="Snapchat Icon" width="40px" height="32px"/>
      </div>
    </div>
  </footer>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $company['Id']; 
    $name = $_POST['name']; 
    $surname = $_POST['surname'];
    $emailInput = $_POST['email']; 
    $passwordInput = $_POST['password'];

    $strep->editUser($id,$name,$surname,$emailInput,$passwordInput);
    header("location:users.php");
}

?>