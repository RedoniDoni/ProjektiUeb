<?php 

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
                        <td><?php echo $user['Emri'];?></td>
                        <td><?php echo $user['Mbiemri'];?></td>
                        <td><?php echo $user['Emaili'];?></td>
                        <td><?php echo $user['Passwordi'];?></td>
                        <td><?php echo $user['Roli'];?></td>
                        <td><a href='edit.php?id=<?php echo $user['Id']?>'>Edit</a></td> 
                        <td><a href='delete.php?id=<?php echo $user['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>
</html>