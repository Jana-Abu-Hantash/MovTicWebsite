<?php

session_start();

$user_id = $_SESSION['UserID'];
$Fname = $_SESSION['FirstName'];
$Lname = $_SESSION['LastName'];

include("db.php");
ini_set('display_errors', 1);

// create the connection 
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);


$name = "";
$Release_Date = "";
$Duration = "";
$Age_Restriction = "";
$Synopsis = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get method: Show the data of the movies

    if (isset($_GET['Name'])) {

        $name = $_GET['Name'];
        $Release_Date = $_GET['Release_Date'];

        $query = "SELECT * FROM movies WHERE name = '" . $_GET['Name'] . "' AND Release_date = '" . $_GET['Release_Date'] . "' ";
        if ($stmt = $mysqli->prepare($query)) {

            $stmt->execute();

            $result = $stmt->get_result();

            while ($row = $result->fetch_row()) {
                $name = $row[0];
                $Release_Date = $row[1];
                $Duration = $row[2];
                $Age_Restriction = $row[3];
                $Synopsis = $row[4];

            }

        }
    } else {
        header("location: MainPage.php");
        exit;
    }

} else {
    if (isset($_POST["update"])) {

        // Post method: Update the data of the movies
        $name = $_POST["Name"];
        $Release_Date = $_POST["Release_Date"];
        $Duration = $_POST["Duration"];
        $Age_Restriction = $_POST["Age_Restriction"];
        $Synopsis = $_POST["Synopsis"];

        do {
            if (empty($name) || empty($Release_Date) || empty($Duration) || empty($Age_Restriction) || empty($Synopsis)) {
                $errorMessage = "All the field are required";
                break;
            }

            $sql = "UPDATE movies" .
                "SET Name = '$name', Release_Date = '$Release_Date', Duration = '$Duration', Age_Restriction = '$Age_Restriction', Synopsis = '" . $Synopsis . "'" .
                "WHERE Name= '" . $_GET['Name'] . "' AND Release_Date = '" . $_GET['Release_Date'] . "' ";

            $result = $mysqli->query($sql);

            if ($result) {
                $successMessage = "Movies updated successfully";

                header("location: MainPage.php");
                exit;

            } else {
                $errorMessage = "Invalid query " . $mysqli->error;
                break;
            }
        } while (false);

    }
}

?>

<html>

<head>

    <title> UPDATE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <script src="script.js"></script>

</head>

<body style=" margin: 50px; background-color: rgb(4, 15, 22);">

    <header>

        <nav class="py-2 navbar navbar-expand-md navbar-dark fixed-top bg-black">
            <div class="container-fluid">

                <a class="navbar-brand" style="font-size: 1.6rem; font-family: Times;"
                    href="http://localhost/MovTic/userloggedin/admin/mainPage.php"> <i class="bi bi-film"></i>
                    MovTic</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <h3 style="font-size: 1.2rem; font-family: Times; color: white;" class="px-3">
                    <?php echo $Fname . " " . $Lname; ?> <i class="bi bi-person-circle text-white px-3"></i>
                </h3>

                <form class="d-flex gap-4 py-2">
                    <a class="btn px-5"
                        style="background-color: rgb(130, 48, 56); color: white; font-size: 1rem; font-family: Times;"
                        href="http://localhost/MovTic/HomePage.html" onclick="handleClick(this)"> Log Out</a>
                </form>


            </div>
        </nav>

    </header>


    <div class="container my-5">
        <h2 class="text-white py-5">Update Movie</h2>
        <?php
        if (!empty($errorMessage)) { ?>

        <div class='alert alert-danger alert-dismissible fade show' role='alert' style = "font-weight: bold;">
            <?php echo $errorMessage ?>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label-close> </button>
        </div>
        <?php
        }
        ?>
        <form method="post">
            <input type="hidden" value="<?php echo $name; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-white">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-white">Release Date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Release_Date" value="<?php echo $Release_Date; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-white">Duration</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Duration" value="<?php echo $Duration; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-white">Age Restriction</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Age_Restriction"
                        value="<?php echo $Age_Restriction; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-white">Synopsis</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Synopsis" value="<?php echo $Synopsis; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) { ?>

            <div class='row mb-3'>
                <div class='alert alert-success alert-dismissible fade show' role='alert' style = "font-weight: bold;">
                    <strong>
                        <?php echo $successMessage ?>
                    </strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label-close></button>
                </div>
            </div>

            <?php } ?>

            <div class="row mb-3">

                <input type="submit" class="offset-sm-3 col-sm-3 d-grid btn btn-primary" name="update" value="Submit">

                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href=" http://localhost/MovTic/userloggedin/admin/mainPage.php"
                        role="button">Cancel</a>
                </div>

            </div>

        </form>
    </div>
</body>

</html>