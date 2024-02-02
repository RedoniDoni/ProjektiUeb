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
  <title>Projekti</title>
  <link rel="stylesheet" href="Dashboard.css">
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
  <main>
    <fieldset>
    <h2>Hapësira vetëm për ADMIN-in</h2>
    <div class="operation-group">
        <div class="operation-content">
            <p>Insertimi, fshirja dhe editimi i user-ave:</p>
            <ul>
                <li><a href="LogInForm.php"><button id="insert-button">Insert User</button></a></li>
                <li><a href="deleteUser.php"><button id="delete-button">Delete User / Edit User</button></a></li>
            </ul>
        </div>
    </div>
    <div class="operation-group">
        <div class="operation-content">
            <p>Insertimi, fshirja dhe editimi i kompanive:</p>
            <ul>
                <li><a href="InsertCompany.php"><button id="insert-button">Insert Company</button></a></li>
                <li><a href="deleteCompany.php"><button id="delete-button">Delete Company / Edit Company</button></a></li>
            </ul>
        </div>
    </div>
    <div class="operation-group">
        <div class="operation-content">
            <p>Insertimi i veturave:</p>
            <ul>
                <li><a href="InsertCar.php"><button id="insert-button">Insert Car</button></a></li>
            </ul>
        </div>
    </div>

    <div class="operation-group">
        <div class="operation-content">
            <p>Insertimi i historive:</p>
            <ul>
                <li><a href="InsertHistory.php"><button id="insert-button">Insert History</button></a></li>
            </ul>
        </div>
    </div>
    </fieldset>
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
