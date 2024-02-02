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
    <link rel="stylesheet" href="companys.css">
    <title>Historys</title>
</head>
    <body>
    <?php
        include 'header.php';
    ?>
        <fieldset>
            <legend>Tabela e historive</legend>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Pershkrimi</th>
                <th>Vitet</th>
                <th>Numri i veturave</th>
                <th>Nr i veturave me qira</th>
                <th>Vleresimi</th>
                <th>Te ardhura</th>
                <th>Shpenzime</th>
                <th>Fitim</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($historys as $history) { ?> 
                    <tr>
                        <td><?php echo $history['ID'];?></td>
                        <td><?php echo $history['Pershkrimi'];?></td>
                        <td><?php echo $history['Vitet'];?></td> 
                        <td><?php echo $history['NrVetura'];?></td>
                        <td><?php echo $history['NrQira'];?></td>
                        <td><?php echo $history['Vleresimi'];?></td> 
                        <td><?php echo $history['Para'];?></td>
                        <td><?php echo $history['Shpenzime'];?></td>
                        <td><?php echo $history['Fitim'];?></td>
                        <td><a href='deleteHistory.php?ID=<?php echo $history['ID']?>'>Delete</a></td>
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
