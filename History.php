<?php
  include_once 'CarRepository.php';
  $carRepository = new CarRepository();
  $cars = $carRepository->getAllCars();

  include_once 'HistoryRepository.php';
  $historyRepository = new HistoryRepository();
  $historys = $historyRepository->getAllHistorys();

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
  <link rel="stylesheet" href="History.css">
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
        <legend><h2>Veturat tona ndër vite</h2></legend>
        <div class="images">
        <?php foreach ($cars as $car) { ?>
          <div class="images">
            <div class="image-container">
                <img src="<?php echo $car['Foto']; ?>" alt="Company Photo">
                  <p><?php echo $car['Shenim']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
            <div class="image-container">
              <!--
                <img src="img20.jpg" alt="Foto 20">
                <p>Veturat tona në vitin 2003</p>
              -->
            </div>
            <div class="image-container">
              <!--
                <img src="img21.png" alt="Foto 21">
                <p>Disa nga veturat tona në vitin 2006</p>
              -->
            </div>
            <div class="image-container">
              <!--
                <img src="img22.jpg" alt="Foto 22">
                <p>Disa nga veturat tona në vitin 2010</p>
                -->
            </div>
            <div class="image-container">
              <!--
                <img src="img23.jpg" alt="Foto 23">
                <p>Disa nga veturat tona në vitin 2013</p>
                -->
            </div>
            <div class="image-container">
              <!--
                <img src="img24.jpg" alt="Foto 24">
                <p>Disa nga veturat tona në vitin 2020</p>
                -->
            </div>
            <div class="image-container">
              <!--
                <img src="img25.webp" alt="Foto 25">
                <p>Disa nga veturat tona të reja të vitit 2024</p>
                -->
            </div>
        </div>
    </fieldset>
    <fieldset>
      <legend><h2>Historia personale e kompanisë</h2></legend>
      <table id="dynamicTable" border="1">
      <tr>
              <th></th>
              <th>Vitet</th>
              <th>Numri i veturave</th>
              <th>Numri i veturave me qera</th>
              <th>Vlerësimi nga konsumatorët 1-10</th>
              <th>Total të ardhura</th>
              <th>Shpenzime totale</th>
              <th>Fitimi/Humbja neto</th>
          </tr>
      </tr>
        <?php foreach ($historys as $history) { ?>
          <tr>
            <th><?php echo $history['Pershkrimi']; ?></th>
            <td><?php echo $history['Vitet']; ?></td>
            <td><?php echo $history['NrVetura']; ?></td>
            <td><?php echo $history['NrQira']; ?></td>
            <td><?php echo $history['Vleresimi']; ?></td>
            <td><?php echo $history['Para']; ?></td>
            <td><?php echo $history['Shpenzime']; ?></td>
            <td><?php echo $history['Fitim']; ?></td>
          </tr>
        <?php } ?>
        <!--
          <tr>
              <th>Startimi i kompanisë</th>
              <td>2003 - 2004</td>
              <td>2 vetura</td>
              <td>2 vetura</td>
              <td>4</td>
              <td>25000€</td>
              <td>27000€</td>
              <td>-2000€</td>
          </tr>
          <tr>
              <th>Rritje e vazhdueshme</th>
              <td>2004 - 2010</td>
              <td>27 vetura</td>
              <td>23 vetura</td>
              <td>6</td>
              <td>125000€</td>
              <td>87000€</td>
              <td>38000€</td>
          </tr>
          <tr>
              <th>Rritje e vazhdueshme</th>
              <td>2010 - 2020</td>
              <td>104 vetura</td>
              <td>88 vetura</td>
              <td>8</td>
              <td>324000€</td>
              <td>128000€</td>
              <td>196000€</td>
          </tr>
          <tr>
              <th>Rekordi i kompanisë</th>
              <td>2020 - 2024</td>
              <td>201 vetura</td>
              <td>197 vetura</td>
              <td>10</td>
              <td>525000€</td>
              <td>210000€</td>
              <td>315000€</td>
          </tr>
        -->
      </table>
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
