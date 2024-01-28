<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login/Sign Up Form</title>
  <link rel="stylesheet" href="LogInForm.css">
</head>

<body>
  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="loginForm" class="form" onsubmit="return validateFormLogIn()">
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

    <form id="signupForm" class="form hidden" onsubmit="return validateSignupForm()">
      <h2 >Regjistrohu</h2>
      <label  for="emriSignUp"><b>Emri juaj:</b></label>
      <input type="text" id="emriSignUp" name="name">
      <p id="emriError" class="error-message"></p>
      <label for="mbiemriSignUp"><b>Mbiemri juaj: </b></label>
      <input type="text" id="mbiemriSignUp" name="surname">
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