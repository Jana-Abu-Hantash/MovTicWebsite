<?php
session_start();

$admin_id = $_SESSION['AdminID'];
$Fname = $_SESSION['FirstName'];
$Lname = $_SESSION['LastName'];

?>

<html>

<head>
    <title> ADMIN MAIN PAGE </title>
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

    <h1 class="py-5" style="color: white;">List of All Movies</h1>


    <?php
    if (!empty($errorMessage)) { ?>

    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <?php echo $errorMessage ?>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label-close> </button>
    </div>
    <?php
    }
    if (!empty($successMessage)) { ?>

    <div class='row mb-3'>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>
                <?php echo $successMessage ?>
            </strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label-close></button>
        </div>
    </div>

    <?php }
    ?>


    <table class="table" style="color: white;">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Release Date</th>
                <th>Duration</th>
                <th>Age Restrictions</th>
                <th>Synopsis</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php

            ini_set('display_errors', 1);
            include('db.php');

            // create the connection 
            $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);


            if ($mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                exit();
            }

            // Read all row from database
            $query = "SELECT * FROM movies";
            $result = $mysqli->query($query);

            if (!$result) {
                die("Invalid query: " . $mysqli->error);
            }

            while ($row = $result->fetch_assoc()) {

                echo "<tr>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Release_Date"] . "</td>
                <td>" . $row["Duration"] . "</td>
                <td>" . $row["Age_Restriction"] . "</td>
                <td>" . $row["Synopsis"] . "</td>
                <td>
                    <div class = 'py-2'> 
                        <a class='btn btn-primary btn-sm' href='update.php?Name=$row[Name]&&Release_Date=$row[Release_Date]'>Update</a>
                    </div>
                    <div class = 'justify-content-center'>
                        <a class='btn btn-danger btn-sm' href='delete.php?Name=$row[Name]&&Release_Date=$row[Release_Date]'>Delete </a>
                    </div>
                </td>
            </tr>";

            }

            ?>
        </tbody>

    </table>

</body>

</html>