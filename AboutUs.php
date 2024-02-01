<?php
  include_once 'CompanyRepository.php';
  $companyRepository = new CompanyRepository();
  $companys = $companyRepository->getAllCompanys();

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
  <link rel="stylesheet" href="AboutUs.css">
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
      <?php foreach ($companys as $company) { ?>
            <div class="image-text-container">
                <div class="image-container">
                    <img src="<?php echo $company['Foto']; ?>" alt="Company Photo">
                </div>
                <div class="text-container">
                    <p><?php echo $company['Shenim']; ?></p>
                </div>
            </div>
        <?php } ?>
      <div class="image-text-container">
          <div class="image-container">
              <!-- <img src="img15.jpg" alt="Photo 15"> -->
          </div>
          <div class="text-container">
              <!-- <p>Kompania jonë gjendet në lokacione të ndryshme të Kosovës.  Momentalisht gjendemi në 5 pika kryesore : Prishtinë, Prizren, 
                Pejë, Kamenicë dhe Gjakovë!
              </p> -->
          </div>
      </div>
      <div class="image-text-container">
          <div class="image-container">
              <!-- <img src="img16.jpg" alt="Photo 16"> -->
          </div>
          <div class="text-container">
              <!-- <p>Edhe pse ne nuk jemi prodhues, gjithmonë i testojmë veturat tona rregullisht, sepse siguria e konsumatorëve është
                parësore për ne!
              </p> -->
          </div>
      </div>
      <div class="image-text-container">
          <div class="image-container">
               <!-- <img src="img17.webp" alt="Photo 17"> -->
          </div>
          <div class="text-container">
              <!-- <p>Në secilen lokacion të kompanisë sonë, gjenden mjaftueshëm përfaqësues që mundohen të japin detaje dhe përgjigje për 
                çdo pyetje eventuale të konsumatorëve!
              </p> -->
          </div>
      </div>
      <div class="image-text-container">
          <div class="image-container">
              <!-- <img src="img18.jpg" alt="Photo 18"> -->
          </div>
          <div class="text-container">
             <!-- <p>Kompania jonë operon për më shumë se 20 vite. Filluam me 2 vetura, ndërsa sot kemi mbi 200 vetura në dispozicion. Saktësia dhe siguria në 
          çdo aspekt na dallojnë nga kompanitë tjera ekzistuese!</p> -->
          </div>
      </div>
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
