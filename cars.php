<?php 

include "DatabaseConnection.php";
include_once "CarRepository.php";

$strep = new CarRepository();
$cars = $strep->getAllCars();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <title>Cars</title>
</head>
    <body>
        <table>
            <thead>
            <tr>
                <th>Foto</th>
                <th>Shenim</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($cars as $car) { ?> 
                    <tr>
                        <td><?php echo $car['Foto'];?></td>
                        <td><?php echo $car['Shenim'];?></td>
                        <td><a href='editCar.php?id=<?php echo $car['Id']?>'>Edit</a></td> 
                        <td><a href='deleteCar.php?id=<?php echo $car['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>