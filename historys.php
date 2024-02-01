<?php 

include "DatabaseConnection.php";
include_once "HistoryRepository.php";

$strep = new HistoryRepository();
$historys = $strep->getAllHistorys();

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
                <th>Pershkrimi</th>
                <th>Vitet</th>
                <th>NrVetura</th>
                <th>NrQira</th>
                <th>Vleresimi</th>
                <th>Para</th>
                <th>Shpenzime</th>
                <th>Fitim</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($historys as $history) { ?> 
                    <tr>
                        <td><?php echo $history['Pershkrimi'];?></td>
                        <td><?php echo $history['Vitet'];?></td>
                        <td><?php echo $history['NrVetura'];?></td>
                        <td><?php echo $history['NrQira'];?></td>
                        <td><?php echo $history['Vleresimi'];?></td>
                        <td><?php echo $history['Para'];?></td>
                        <td><?php echo $history['Shpenzime'];?></td>
                        <td><?php echo $history['Fitim'];?> </td>
                        <td><a href='editHistory.php?id=<?php echo $history['Id']?>'>Edit</a></td>
                        <td><a href='deleteHistory.php?id=<?php echo $history['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> <
            </tbody>
        </table>
    </body>
</html>