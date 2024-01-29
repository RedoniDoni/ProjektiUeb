<?php
include_once 'Produkti.php';
include_once 'ProductRepository.php';

if (isset($_POST['submitbtn'])) {
    $foto = $_POST['Foto'];
    $marka = $_POST['Marka'];
    $modeli = $_POST['Modeli'];
    $viti = $_POST['Viti'];
    $kilometra = $_POST['Kilometra'];

    $product = new Producti($foto, $marka, $modeli, $viti, $kilometra);

    $productRepository = new ProductRepository();
    $productRepository->insertProduct($product);
    header("location:products.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">  
            <input type="text" name="Foto" ><br>
            <input type="text" name="Marka" ><br>
            <input type="text" name="Modeli" ><br>
            <input type="text" name="Viti" ><br>
            <input type="text" name="Kilometra" ><br>
            <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>
</html>