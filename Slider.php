<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projekti</title>
  <link rel="stylesheet" href="Slider.css">
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
    <h1 style="color: blue; text-align:center;"><b>Karakteristikat e Veturave</b></h1>
    <div class="slideshow-container">
      <img id="slideshow" src="img01.jpg"/>
      <div class="button-container">
        <button onclick="prevImg()">◄</button>
        <button onclick="nextImg()">►</button>
      </div>
    </div>
    <div class="car-details">
      <p id="marka">Marka:</p>
      <p id="modeli">Modeli:</p>
      <p id="viti">Viti i prodhimit:</p>
      <p id="kilometra">Kilometra:</p>
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
  
    <script>
      let i = 0;
      
  let imgArray = ['img01.jpg', 'img02.jpg', 'img03.jpg', 'img04.jpg', 'img05.jpg', 'img06.jpg',
    'img07.jpg', 'img08.jpg', 'img09.jpg', 'img10.jpg', 'img11.jpg', 'img12.jpg'];
  
  let carDetails = [
    { marka: 'Audi', modeli: 'Q5', viti: '2019', kilometra: '25122 km' },
    { marka: 'Audi', modeli: 'RS3', viti: '2020', kilometra: '34212 km' },
    { marka: 'Audi', modeli: 'RS5', viti: '2019', kilometra: '117234 km' },
    { marka: 'Bmw', modeli: 'X5', viti: '2017', kilometra: '123777 km' },
    { marka: 'Bmw', modeli: '730', viti: '2018', kilometra: '89001 km' },
    { marka: 'Bmw', modeli: 'X3', viti: '2019', kilometra: '12566 km' },
    { marka: 'Mercedes', modeli: 'S Class', viti: '2023', kilometra: '00 km' },
    { marka: 'Mercedes', modeli: 'A Class', viti: '2019', kilometra: '123223 km' },
    { marka: 'Mercedes', modeli: 'A Class', viti: '2021', kilometra: '67234 km' },
    { marka: 'Lamborghini', modeli: 'Urus', viti: '2022', kilometra: '29128 km' },
    { marka: 'Porsche', modeli: '911', viti: '2021', kilometra: '21345 km' },
    { marka: 'Tesla', modeli: 'Model Y', viti: '2019', kilometra: '25876 km' },
  ];
  
  function updateDetails() {
    document.getElementById('marka').textContent = 'Marka: ' + carDetails[i].marka;
    document.getElementById('modeli').textContent = 'Modeli: ' + carDetails[i].modeli;
    document.getElementById('viti').textContent = 'Viti i prodhimit: ' + carDetails[i].viti;
    document.getElementById('kilometra').textContent = 'Kilometra: ' + carDetails[i].kilometra;
  }
  
  
  function nextImg() {
    if (i < imgArray.length - 1) {
      i++;
    } else {
      i = 0;
    }
    document.getElementById('slideshow').src = imgArray[i];
    updateDetails();
  }
  
  function prevImg() {
    if (i > 0) {
      i--;
    } else {
      i = imgArray.length - 1;
    }
    document.getElementById('slideshow').src = imgArray[i];
    updateDetails();
  }
  
  updateDetails();
  
    </script>
</body>
</html>
