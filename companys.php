<?php 

include "DatabaseConnection.php";
include_once "CompanyRepository.php";

$strep = new CompanyRepository();
$companys = $strep->getAllCompanys();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="companys.css">
    <title>Companys</title>
</head>
    <body>
    <?php
        include 'header.php';
    ?>
        <fieldset>
            <legend>Tabela e kompanive</legend>
        <table>
            <thead>
            <tr>
                <th>Foto</th>
                <th>Shenim</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Created by</th>
                <th>Modified by</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($companys as $company) { ?> 
                    <tr>
                        <td><?php echo $company['Foto'];?></td>
                        <td><?php echo $company['Shenim'];?></td>
                        <td><a href='editCompany.php?id=<?php echo $company['Id']?>'>Edit</a></td> 
                        <td><a href='deleteCompany.php?id=<?php echo $company['Id']?>'>Delete</a></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
        </fieldset>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>