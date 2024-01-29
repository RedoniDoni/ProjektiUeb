<?php 

include "DatabaseConnection.php";
include_once "ProductRepository.php";

$strep = new ProductRepository();
$products = $strep->getAllProducts();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>Foto</th>
                <th>Marka</th>
                <th>Modeli</th>
                <th>Viti</th>
                <th>Kilometra</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product) { ?> 
                    <tr>
                        <td><?php echo $product['Foto'];?></td>
                        <td><?php echo $product['Marka'];?></td>
                        <td><?php echo $product['Modeli'];?></td>
                        <td><?php echo $product['Viti'];?></td>
                        <td><?php echo $product['Kilometra'];?></td>
                        <td><a href='edit.php?id=<?php echo $product['Id']?>'>Edit</a></td> 
                        <td><a href='delete.php?id=<?php echo $product['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
</html>