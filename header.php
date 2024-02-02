<?php

include_once 'UserRepository.php';
  session_start();
  if (!isset($_SESSION['role'])) {
    header("location: LogInForm.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>Projekti</title>
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
          <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "admin"): ?>
          <li><a href="Dashboard.php">Dashboard</a></li>
         <?php endif; ?>
          <li><a href="LogOut.php">Log Out</a></li>
        </ul>
      </nav>
      <div class="header-right">
        <div class="buttons">
          <a href="LogInForm.php"><button id="login-button">Log In / Sign Up</button></a>
        </div>
      </div>
  </header>
</body>
</html>