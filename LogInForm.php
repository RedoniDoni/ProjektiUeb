<?php
include_once 'UserRepository.php';
include_once 'Useri.php';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['loginbtn'])) {
    $emailLogin = $_POST['email'];
    $passwordLogin = $_POST['password'];

    if (empty($emailLogin) || empty($passwordLogin)) {
        echo '<script>alert("Fill all fields!");</script>';
    } else {
        $userRepository = new UserRepository();
        $users = $userRepository->getAllUsers();
        foreach ($users as $user) {
            if ($user['email'] == $emailLogin && $user['password'] == $passwordLogin) {
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $emailLogin;
                $_SESSION['password'] = $passwordLogin;
                $_SESSION['role'] = $user['role'];

                header("location: Home.php");
                exit();
            }
        }
        echo '<script>alert("Invalid email or password!");</script>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['registerBtn'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'user';

    if (empty($emri) || empty($mbiemri) || empty($email) || empty($password)) {
        echo "<script> alert('Fill all fields!');</script>";
    } else {
        $userRepository = new UserRepository();
        $user = new User(null, $emri, $mbiemri, $email, $password, $role);
        $userRepository->insertUser($user);
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="loginForm" class="form" onsubmit="return validateFormLogIn()">
      <h2>Kyçu</h2>
      <label for="email"><b>Email :</b></label>
      <input type="text" id="email" name="email">
      <p id="emailError" class="error-message"></p>
      <label for="password"><b>Password:</b></label>
      <input type="password" id="password" name="password">
      <p id="passwordError" class="error-message"></p>
      <button type="submit"  name="loginbtn" value="Login"><b>Kyçu</b></button>
      <p class="signup-link"><i><b>Nuk keni account? Kliko -></b> <a href="#" onclick="showSignup()">Regjistrohu</a></i></p>
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="signupForm" class="form hidden" onsubmit="return validateSignupForm()">
      <h2 >Regjistrohu</h2>
      <label  for="emriSignUp"><b>Emri juaj:</b></label>
      <input type="text" id="emriSignUp" name="emri">
      <p id="emriError" class="error-message"></p>
      <label for="mbiemriSignUp"><b>Mbiemri juaj: </b></label>
      <input type="text" id="mbiemriSignUp" name="mbiemri">
      <p id="mbiemriError" class="error-message"></p>
      <label for="emailiSignUp"><b>Email: </b></label>
      <input type="text" id="emailiSignUp" name="email">
      <p id="emailErrorSignUp" class="error-message"></p>
      <label for="passwordiSignUp"><b>Krijo nje Password: </b></label>
      <input type="password" id="passwordiSignUp" name="password">
      <p id="passwordErrorSignUp" class="error-message"></p>
      <button type="submit" name="registerBtn" value="register"><b>Regjistrohu </b></button>
      <p class="signup-link"><i><b>Ju keni nje account?  Klikoni -></b><a href="#" onclick="showLogin()">Kyçu</a> </i></p>
    </form>
  </div>
  <script src="LogInForm.js"></script>
</body>
</html>
