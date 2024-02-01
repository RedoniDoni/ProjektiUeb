<?php
include_once 'Useri.php';
include_once 'UserRepository.php';

  if(isset($_POST['loginbtn'])){
    if(empty($_POST['emailInput']) || empty($_POST['passwordInput'])){
      echo "Please fill the required fields!";
    }else{
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['email'] == $emaili && $user['password'] == $password){
            session_start();
      
            $_SESSION['emailInput'] = $email;
            $_SESSION['passwordInput'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:home.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login/Sign Up Form</title>
  <link rel="stylesheet" href="LogInForm.css">
</head>

<body>
  <div class="container">
    <form id="loginForm" class="form" onsubmit="return validateFormLogIn()">
      <h2>Kyçu</h2>
      <label for="email"><b>Email :</b></label>
      <input type="text" id="email" name="emailInput">
      <p id="emailError" class="error-message"></p>
      <label for="password"><b>Password:</b></label>
      <input type="password" id="password" name="passwordInput">
      <p id="passwordError" class="error-message"></p>
      <button type="submit"  name="loginbtn" value="Login"><b>Kyçu</b></button>
      <p class="signup-link"><i><b>Nuk keni account? Kliko -></b> <a href="#" onclick="showSignup()">Regjistrohu</a></i></p>
    </form>

    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post" id="signupForm" class="form hidden" onsubmit="return validateSignupForm()">
      <h2 >Regjistrohu</h2>
      <label  for="emriSignUp"><b>Emri juaj:</b></label>
      <input type="text" id="emriSignUp" name="emriInput">
      <p id="emriError" class="error-message"></p>
      <label for="mbiemriSignUp"><b>Mbiemri juaj: </b></label>
      <input type="text" id="mbiemriSignUp" name="mbiemriInput">
      <p id="mbiemriError" class="error-message"></p>
      <label for="emailiSignUp"><b>Email: </b></label>
      <input type="text" id="emailiSignUp" name="emailInput">
      <p id="emailErrorSignUp" class="error-message"></p>
      <label for="passwordiSignUp"><b>Krijo nje Password: </b></label>
      <input type="password" id="passwordiSignUp" name="passwordInput">
      <p id="passwordErrorSignUp" class="error-message"></p>
      <button type="submit" name="registerBtn" value="register"><b>Regjistrohu </b></button>
      <p class="signup-link"><i><b>Ju keni nje account?  Klikoni -></b><a href="#" onclick="showLogin()">Kyçu</a> </i></p>
    </form>
  </div>
  <script src="LogInForm.js"></script>
  
</body>
</html>