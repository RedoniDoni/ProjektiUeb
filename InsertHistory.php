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
    <title>Historys</title>
    <link rel="stylesheet" href="InsertCompany.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
        <main>
        <fieldset>
        <h1>Insert History</h1>
        <div class="container">
            <form method="POST">
                <div class="form-group">
                <label>Pershkrimi:</label>
                <input type="text" name="pershkrimi">
                </div>

                <div class="form-group">
                <label>Vitet:</label>
                <input type="text" name="vitet">
                </div>

                <div class="form-group">
                <label>Numri i veturave:</label>
                <input type="text" name="nrvetura">
                </div>

                <div class="form-group">
                <label>Numri i veturave me qira:</label>
                <input type="text" name="nrqira">
                </div>

                <div class="form-group">
                <label>Vleresimi nga 1-10:</label>
                <input type="text" name="vleresimi">
                </div>
                
                <div class="form-group">
                <label>Te ardhura:</label>
                <input type="text" name="para">
                </div>

                <div class="form-group">
                <label>Shpenzime:</label>
                <input type="text" name="shpenzime">
                </div>


                <div class="form-group">
                <label>Fitim/Humbje:</label>
                <input type="text" name="fitim">
                </div>

                
                <div class="butoniSave">
                    <button type="submit" name="submit" class="saveButton">Save</button>
                </div>
            </form>
        </div>
    </fieldset>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
