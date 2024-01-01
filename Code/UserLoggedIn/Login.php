<?php
session_start();

ini_set('display_errors', 1);
include('db.php');


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];


    $query = "SELECT user_id, FirstName, LastName, user_type FROM users WHERE email = ? AND password = sha1(?)";

    if ($stmt = $mysqli->prepare($query)) {

        $stmt->bind_param('ss', $email, $pass);
        $stmt->execute();

        $result = $stmt->get_result();
        $num_rows = $result->num_rows;

        if ($num_rows == 0) {
            echo '  <div class="mt-5 alert alert-danger alert-dismissible fade show" role="alert" style = "font-weight: bold;">
            Wrong email or password. Please Try Again. <br>
            New to MovTic Cinemas? <a href="http://localhost/Movtic/UserLoggedIn/Signup.php" class="px-2" style="color: rgb(130, 48, 56);"> Sign Up </a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
        } else {
            $row = $result->fetch_row();
            $user_type = $row[3];


            if ($user_type == 'user') {

                $user_id = $row[0];
                $Fname = $row[1];
                $Lname = $row[2];

                $_SESSION['UserID'] = $user_id;
                $_SESSION['FirstName'] = $Fname;
                $_SESSION['LastName'] = $Lname;

                header("location: UserHomePage.php");
                exit();
            } else if ($user_type == 'admin') {
                $admin_id = $row[0];
                $Fname = $row[1];
                $Lname = $row[2];


                $_SESSION['FirstName'] = $Fname;
                $_SESSION['LastName'] = $Lname;

                header("location: admin/MainPage.php");
                exit();

            }

        }
    }
}

$mysqli->close();
?>

<html>

<head>
    <title> LOG IN PAGE </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style2.css">
    <script defer src="script2.js"></script>

</head>

<body class="p-5 py-5 mb-2">

    <header>

        <nav class="py-2 navbar navbar-expand-md navbar-dark fixed-top bg-black">
            <div class="container-fluid">

                <a class="navbar-brand" style="font-size: 1.6rem; font-family: Times;"
                    href="http://localhost/MovTic/HomePage.html"> <i class="bi bi-film"></i> MovTic</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-1 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link active" style="font-size: 1.2rem; font-family: Times;"
                                aria-current="page" href="http://localhost/MovTic/movies_info.php"> All Movies </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link inactive" style="font-size: 1.2rem; font-family: Times;"> Book a Ticket
                            </a>
                        </li>

                    </ul>

                    <form class="d-flex gap-4 py-2">
                        <a class="btn px-5"
                            style="background-color: rgb(130, 48, 56); color: white; font-size: 1rem; font-family: Times;"
                            href="http://localhost/MovTic/UserLoggedin/Signup.php"> Sign Up</a>
                    </form>

                </div>

            </div>
        </nav>
    </header>

    <div class="p-3 py-5 mb-2">

        <main class="form-signin w-50 m-auto py-5">
            <form id="form" action="login.php" method="post">

                <div class="py-3">
                    <h1 class="text-center mb-3 py-2 title border-bottom text-white"> Log In </h1>
                </div>

                <div class="form-floating">
                    <input type='email' name='email' class="mt-2 form-control" id='email'
                        placeholder="name@example.com" />
                    <label for="email"> Email Address </label>
                </div>
                <div id="error3" style="text-decoration:none; color: red"></div>


                <div class="form-floating">
                    <input type='password' name='password' class="mt-5 form-control" id='password'
                        placeholder="Password" />
                    <label for="password"> Password </label>
                </div>
                <div id="error4" style="text-decoration:none; color: red"></div>


                <div class='py-5'>

                    <button class="w-100 btn btn-lg btn-outline-success fw-bold" style="font-family: Times;"
                        type="submit"> Log In</button>

                    <h5 class="text-white py-3" style="font-family: Times;"> New to MovTic Cinemas?
                        <a href="http://localhost/Movtic/UserLoggedIn/Signup.php" class="px-2"
                            style="text-decoration:none; color:red;"> Sign Up</a>
                    </h5>
                </div>
            </form>
        </main>
        <div class="container">
            <footer class="py- my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="http://localhost/MovTic/HomePage.html"
                            class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="http://localhost/MovTic/movies_info.php"
                            class="nav-link px-2 text-muted">Movies</a></li>
                </ul>
                <p class="text-center text-muted">&copy MovTic Theater 2022</p>
            </footer>
        </div>
    </div>


</body>

</html>