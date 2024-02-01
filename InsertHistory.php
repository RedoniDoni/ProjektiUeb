<?php
    include_once 'Historia.php';
    include_once 'HistoryRepository.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $pershkrimi = $_POST['pershkrimi'];
        $vitet = $_POST['vitet'];
        $nrvetura = $_POST['nrvetura'];
        $nrqira = $_POST['nrqira'];
        $vleresimi = $_POST['vleresimi'];
        $para = $_POST['para'];
        $shpenzime = $_POST['shpenzime'];
        $fitim = $_POST['fitim'];

        if(empty($_POST['pershkrimi']) || empty($_POST['vitet']) || empty($_POST['nrvetura']) ||
            empty($_POST['nrqira']) || empty($_POST['vleresimi']) || empty($_POST['para']) ||
            empty($_POST['shpenzime']) || empty($_POST['fitim'])){
            echo '<script>alert("Please fill all fields!");</script>';
        }
        else{
            $history = new Historia(null, $pershkrimi, $vitet, $nrvetura, $nrqira, $vleresimi, $para, $shpenzime, $fitim);
            $historyRepository = new HistoryRepository();
            $historyRepository->insertHistory($history);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="InsertHistory.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <main>
        <h1>Insert Historys</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <label>Pershkrimi:</label>
                <input type="text" name="pershkrimi">

                <label>Vitet:</label>
                <input type="text" name="vitet">

                <label>Numri i veturave:</label>
                <input type="text" name="nrvetura">

                <label>Numri i veturave me qira:</label>
                <input type="text" name="nrqira">

                <label>Vleresimi nga 1-10:</label>
                <input type="text" name="vleresimi">
                
                <label>Te ardhura:</label>
                <input type="text" name="para">

                <label>Shpenzime:</label>
                <input type="text" name="shpenzime">

                <label>Fitim/Humbje:</label>
                <input type="text" name="fitim">
                <div class="butoniSave">
                    <button type="submit" name="submit" class="saveButton">Save</button>
                </div>
            </form>
        </div>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
