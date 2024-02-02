<?php
    include_once 'Kompania.php';
    include_once 'CompanyRepository.php';
    include_once 'UserRepository.php';

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
    
    $companyError= '';
    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $foto = $_POST['foto'];
        $shenim = $_POST['shenim'];

        if(empty($festival) || empty($time)){
            echo '<script>alert("Please fill all fields!");</script>';
        } else {
            if(isset($_SESSION['id'])){
                $id = $_SESSION['id'];
                $userRepository = new UserRepository();
                $user = $userRepository->getUserById($id);
                $company = new Companys(null, $foto, $shenim, $user['fullName'], '');
                $companyRepository = new CompanyRepository();
                $companyRepository->insertCompany($company);
                echo "<script>alert('Ticket added successfully!');</script>";
            }
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link rel="stylesheet" href="InsertCompany.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
  <main>
    <fieldset>
        <h1>Insert Company</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="form-group">
                    <label>Foto:</label>
                    <input type="text" name="foto">
                </div>

                <div class="form-group">
                    <label>Shenim:</label>
                    <input type="text" name="shenim">
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



