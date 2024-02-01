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
    <title>Companys</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            padding:30px;
        }
        main { 
            margin-top: 30px;
            margin-right:30px:
            margin-bottom: 30px;
            margin-left:30px:
        }
        th, td {
            border: 5px solid #dddddd;
            text-align: left;
            padding: 25px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
    <body>
    <?php
        include 'header.php';
    ?>
        <table>
            <thead>
            <tr>
                <th>Foto</th>
                <th>Shenim</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($companys as $company) { ?> 
                    <tr>
                        <td><?php echo $company['Foto'];?></td>
                        <td><?php echo $company['Shenim'];?></td>
                        <td><a href='editCompany.php?id=<?php echo $company['Id']?>'>Edit</a></td> 
                        <td><a href='deleteCompany.php?id=<?php echo $company['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
        <?php
        include 'footer.php';
    ?>
    </body>
</html>