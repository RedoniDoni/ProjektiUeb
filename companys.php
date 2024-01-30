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
    <link rel="stylesheet" href="users.css">
    <title>Historys</title>
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
                <?php foreach($comapnys as $company) { ?> 
                    <tr>
                        <td><?php echo $comapny['Foto'];?></td>
                        <td><?php echo $company['Shenim'];?></td>
                        <td><a href='editCompany.php?id=<?php echo $company['Id']?>'>Edit</a></td> 
                        <td><a href='deleteCompany.php?id=<?php echo $company['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>