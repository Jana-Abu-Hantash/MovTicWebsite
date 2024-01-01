<?php

session_start();

$Fname = $_SESSION['FirstName'];
$Lname = $_SESSION['LastName'];

ini_set('display_errors', 1);
include('includes.php');
include('db.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$query = "SELECT Name FROM movies";
if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Movie_Names = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Movie_Names[$i] = $row[0];
    }
}

if (isset($_POST['movies'])) {

    $_SESSION['movieName'] = $_POST['movies'];

    $query = "SELECT date FROM shows WHERE Movie_Name = ? GROUP BY Date";
    if ($stmt = $mysqli->prepare($query)) {

        $stmt->bind_param('s', $_SESSION['movieName']);
        $stmt->execute();

        $result = $stmt->get_result();
        $num_rows = $result->num_rows;

        $Dates = [];
        for ($i = 0; $i < $num_rows; $i++) {
            $row = $result->fetch_row();
            $Dates[$i] = $row[0];
        }
    }
}


if (isset($_POST['showdate'])) {

    $_SESSION['movieDate'] = $_POST['showdate'];

    $query = "SELECT Time FROM shows WHERE Movie_Name = ? AND Date = ? ";
    if ($stmt = $mysqli->prepare($query)) {

        $stmt->bind_param('ss', $_SESSION['movieName'], $_SESSION['movieDate']);
        $stmt->execute();

        $result = $stmt->get_result();
        $num_rows = $result->num_rows;

        $Timings = [];
        for ($i = 0; $i < $num_rows; $i++) {
            $row = $result->fetch_row();
            $Timings[$i] = $row[0];
        }
    }
}

if (isset($_POST['showtime'])) {

    $_SESSION['movieTime'] = $_POST['showtime'];

    $query = "SELECT seats.seat, shows.Show_ID FROM shows, seats WHERE shows.Show_ID = seats.Show_ID AND shows.time =? AND shows.Movie_Name = ? AND shows.Date = ?";
    if ($stmt = $mysqli->prepare($query)) {

        $stmt->bind_param('sss', $_SESSION['movieTime'], $_SESSION['movieName'], $_SESSION['movieDate']);
        $stmt->execute();

        $result = $stmt->get_result();
        $num_rows = $result->num_rows;

        $Seats = [];
        for ($i = 0; $i < $num_rows; $i++) {
            $row = $result->fetch_row();
            $Seats[$i] = $row[0];
            $_SESSION['ShowID'] = $row[1];
        }
    }
}

if (isset($_POST['seats'])) {

    $_SESSION['SelectedSeat'] = $_POST['seats'];
}

?>


<html>

<head>

    <title> BOOKING </title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style2.css">
    <script src="script.js"></script>

</head>

<body>


    <header>

        <nav class="py-2 navbar navbar-expand-md navbar-dark fixed-top bg-black">
            <div class="container-fluid">

                <a class="navbar-brand" style="font-size: 1.6rem; font-family: Times;"
                    href="http://localhost/MovTic/userloggedin/UserHomePage.php"> <i class="bi bi-film"></i> MovTic</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-1 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link active" style="font-size: 1.2rem; font-family: Times;"
                                aria-current="page" href="http://localhost/MovTic/UserLoggedIn/movies_info.php"> All
                                Movies </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link inactive" style="font-size: 1.2rem; font-family: Times;"> Book a Ticket
                            </a>
                        </li>

                    </ul>

                    <h3 style="font-size: 1.2rem; font-family: Times; color: white;" class="px-3">
                        <?php echo $Fname . " " . $Lname; ?> <i class="bi bi-person-circle text-white px-3"></i>
                    </h3>

                    <form class="d-flex gap-4 py-2">
                        <a class="btn px-5"
                            style="background-color: rgb(130, 48, 56); color: white; font-size: 1rem; font-family: Times;"
                            onclick="handleClick(this)" href="http://localhost/MovTic/HomePage.html"> Log Out</a>
                    </form>

                </div>

            </div>
        </nav>

    </header>

    <div class="row py-5 text-white">

        <div class="col-md-4 py-5 px-5 vl">

            <h3 class="border-bottom title text-center"> CHOOSE MOVIE : </h3>
            <form method='post' action='BookTickets.php'>

                <?php foreach ($Movie_Names as $movie): ?>
                <div class="d-grid gap-3 py-3">
                    <input class="btn" style="border-color: rgb(6, 214, 160); color: white; font-weight: bold;"
                        type='submit' name='movies' value="<?php echo $movie; ?>" />
                </div>
                <?php endforeach; ?>

            </form>

        </div>

        <div class="col-md-4 py-5 px-5 vl">

            <h3 class="border-bottom title text-center"> TO BOOK A TICKET: </h3>

            <form method='post' action='BookTickets.php'>

                <div class="d-grid gap-3">
                    <?php if (isset($Dates)) {
                        if ($num_rows == 0) {
                            echo "<h5 class='subtitle'> NO AVAILABLE SHOWS </h5>";
                        } else {
                    ?>
                    <h4 class="border-bottom subtitle"> DATE: </h4>
                    <?php foreach ($Dates as $Date): ?>
                    <input class="btn" style="background-color: rgb(130, 48, 56); color: white; font-weight: bold;"
                        type='submit' name='showdate' value="<?php echo $Date; ?>" />
                    <?php endforeach;
                        }
                    } ?>
                </div>

                <div class="d-grid gap-3">
                    <?php if (isset($Timings)) { ?>
                    <h4 class="subtitle border-bottom"> TIME: </h4>
                    <?php foreach ($Timings as $Time): ?>
                    <input class="btn" style="background-color: rgb(130, 48, 56); color: white; font-weight: bold;"
                        type='submit' name='showtime' value="<?php echo $Time; ?>" />
                    <?php endforeach;
                    } ?>
                </div>

                <div class="container-fluid">
                    <?php if (isset($Seats)) { ?>
                    <h4 class="subtitle border-bottom py-2"> SEAT: </h4>
                    <div class="screen">THE SCREEN</div>
                    <?php foreach ($Seats as $Seat): ?>
                    <input class="btn mb-4 px-3" type='submit'
                        style="background-color: rgb(130, 48, 56); color: white; font-weight: bold;" name='seats'
                        value="<?php echo $Seat; ?>" />
                    <?php endforeach;
                    } ?>
                </div>

            </form>

        </div>

        <div class="col-md-4 py-5 px-5 movie-info">

            <h3 class="border-bottom title text-center"> Ticket Summary: </h3>
            <?php

            if (isset($_POST['movies'])) {
                $Movie_Name = $_SESSION['movieName'];

                out("<div class='py-3'> <h5 class='Main_text'> Movie Name: </h5> <h5 class='subtitle'> $Movie_Name </h5> </div>");

            }


            if (isset($_POST['showdate'])) {
                $Movie_Name = $_SESSION['movieName'];
                out("<div class='py-3'> <h5 class='Main_text'> Movie Name: </h5> <h5 class='subtitle'> $Movie_Name </h5> </div>");

                $Movie_Date = $_SESSION['movieDate'];
                out("<div class='py-3'> <h5 class='Main_text'> Movie Date: </h5> <h5 class='subtitle'> $Movie_Date </h5> </div>");
            }


            if (isset($_POST['showtime'])) {

                $Movie_Name = $_SESSION['movieName'];
                out("<div class='py-3'> <h5 class='Main_text'> Movie Name: </h5> <h5 class='subtitle'> $Movie_Name </h5> </div>");

                $Movie_Date = $_SESSION['movieDate'];
                out("<div class='py-3'> <h5 class='Main_text'> Show Date: </h5> <h5 class='subtitle'> $Movie_Date </h5> </div>");

                $Movie_Time = $_SESSION['movieTime'];
                out("<div class='py-3'> <h5 class='Main_text'> Show Time: </h5> <h5 class='subtitle'> $Movie_Time </h5> </div>");
            }

            if (isset($_POST['seats'])) {

                $Movie_Name = $_SESSION['movieName'];
                out("<div class='py-3'> <h5 class='Main_text'> Movie Name: </h5> <h5 class='subtitle'> $Movie_Name </h5> </div>");

                $Movie_Date = $_SESSION['movieDate'];
                out("<div class='py-3'> <h5 class='Main_text'> Movie Date: </h5> <h5 class='subtitle'> $Movie_Date </h5> </div>");

                $Movie_Time = $_SESSION['movieTime'];
                out("<div class='py-3'> <h5 class='Main_text'> Show Time: </h5> <h5 class='subtitle'> $Movie_Time </h5> </div>");

                $_SESSION['SelectedSeat'] = $_POST['seats'];
                $Selected_Seat = $_SESSION['SelectedSeat'];
                out("<div class='py-3'> <h5 class='Main_text'> Selected Seat: </h5> <h5 class='subtitle'> $Selected_Seat </h5> </div>");
            ?>

            <form method='post' action='BookTickets.php'>
                <input class="btn" style="background-color: rgb(130, 48, 56); color: white; font-weight: bold;"
                    type='submit' name='Book' value="CLICK HERE TO CONFIRM" />
            </form>
            <?php }

            if (isset($_POST['Book'])) {

                $Show_id = $_SESSION['ShowID'];
                $User_id = $_SESSION['UserID'];
                $seat_no = $_SESSION['SelectedSeat'];

                $query = "INSERT INTO `tickets`(price , Show_id, User_id, seat_no) VALUES (20 ,'$Show_id', '$User_id', '$seat_no')";

                if ($mysqli->query($query)) {
                    echo '  <div class="mt-5 alert alert-success alert-dismissible fade show" role="alert" style = "font-weight: bold;">
                    The ticket has been added successfully. </div>'; ?>
            <div class="px-4">
                <a class="btn" style="background-color: rgb(130, 48, 56); color: white; font-weight: bold;"
                    href="http://localhost/MovTic/userloggedin/UserHomePage.php"> Home Page </a>

                <a class="btn" style="background-color: rgb(130, 48, 56); color: white; font-weight: bold;"
                    href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Book another Ticket </a>

            </div>
            <?php

                } else {
                    echo "Error: " . $query . "<br>" . $mysqli->error;
                }
            }

            $mysqli->close();
            ?>

        </div>
    </div>

</body>

</html>