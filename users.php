<?php 

include_once 'Useri.php';
include "DatabaseConnection.php";
include_once "UserRepository.php";

$strep = new UserRepository();
$users = $strep->getAllUsers();

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
    <?php
        include 'header.php';
    ?>
    <body>
        <fieldset>
            <legend>Tabela e users dhe admins</legend>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Passwordi</th>
                <th>Roli</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?> 
                    <tr>
                        <td><?php echo $user['id'];?></td>
                        <td><?php echo $user['emri'];?></td>
                        <td><?php echo $user['mbiemri'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['password'];?></td>
                        <td><?php echo $user['role'];?></td>
                        <td><a href='UserEdit.php?id=<?php echo $user['id']?>'>Edit</a></td> 
                        <td><a href='deleteUser.php?id=<?php echo $user['id']?>'>Delete</a></td>
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
