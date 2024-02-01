<?php
    include_once 'Vetura.php';
    include_once 'CarRepository.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $foto = $_POST['foto'];
        $shenim = $_POST['shenim'];

        if(empty($_POST['foto']) || empty($_POST['shenim'])){
                echo '<script>alert("Please fill all fields!");</script>';
        }
        else{
            $car = new Vetura(null, $foto, $shenim);
            $carRepository = new CarRepository();
            $carRepository->insertCar($car);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="InsertCar.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <main>
    <fieldset>
        <h1>Insert Car</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="form-group">
                <label>Foto:</label>
                <input type="text" name="foto">
                </div>
                
                <div class="form-group">
                <label>Shenim:</label>
                <input type="text" name="shenim">
                </div>

                <div class="butoniSave">
                    <button type="submit" name="submit" class="saveButton">Save</button>
                </div>
            </form>
        </div>
      </fieldset>
    </main>
    <main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
