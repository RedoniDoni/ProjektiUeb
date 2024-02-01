<?php 

include_once 'Useri.php';
include "DatabaseConnection.php";
include_once "UserRepository.php";

$strep = new UserRepository();
$users = $strep->getAllUsers();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Passwordi</th>
                <th>Roli</th>
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
    </body>
</html>
