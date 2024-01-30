<?php
    include_once 'Kompania.php';
    include_once 'CompanyRepository.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $foto = $_POST['foto'];
        $shenim = $_POST['shenim'];

        if(empty($_POST['foto']) || empty($_POST['shenim'])){
                echo '<script>alert("Please fill all fields!");</script>';
        }
        else{
            $company = new Kompania(null, $foto, $shenim);
            $companyRepository = new CompanyRepository();
            $companyRepository->insertCompany($company);
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
    <main>
        <h1>Insert Companys</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <label>Foto:</label>
                <input type="text" name="foto">

                <label>Shenim:</label>
                <input type="text" name="shenim">

                <div class="butoniSave">
                    <button type="submit" name="submit" class="saveButton">Save</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
