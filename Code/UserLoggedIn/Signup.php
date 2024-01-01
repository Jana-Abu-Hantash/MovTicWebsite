<?php
ini_set('display_errors', 1);
include('db.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


if (isset($_POST['email']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['password'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $query = "INSERT INTO users VALUES (NULL, '$firstName','$lastName','$email', SHA1('$pass'), 'user' )";

    if ($mysqli->query($query)) {
        echo '  <div class="mt-5 alert alert-success alert-dismissible fade show" role="alert" style = "font-weight: bold;">
                    You have been successfully signed up. To proceed please <a href="http://localhost/Movtic/userloggedIn/login.php"
                    style="color: green"> log in </a> .
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>

<html>

<head>
    <title>Sign up page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style2.css">
    <script defer src="script2.js"></script>


</head>

<body class="form-text p-5 justify-content-center">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black">
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
                        <a class="btn btn-success px-5" style="font-size: 1rem; font-family: Times;"
                            href="http://localhost/MovTic/UserloggedIn/login.php"> Log In</a>
                    </form>

                </div>

            </div>
        </nav>

    </header>

    <div class="px-5 py-5 mb-5 container">

        <main class="form-signin w-50 m-auto py-5">


            <form id="form" action="signup.php" method="post">

                <div class="py-2 text-center">

                    <h1 class="text-center mb-3 py-2 border-bottom text-white"
                        style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold; background-color: rgb(130, 48, 56)">
                        Sign Up </h1>
                </div>

                <div class="row g-3" id="decoration">
                    <div class="form-floating col-12">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="firstName">
                        <label for="firstName" class="form-label">First name</label>
                    </div>
                    <div id="error1" style="text-decoration:none; color: red"></div>


                    <div class="form-floating col-12">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="lastName">
                        <label for="lastName" class="form-label">Last name</label>
                    </div>
                    <div id="error2" style="text-decoration:none; color: red"></div>

                    <div class="form-floating col-12">
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                        <label for="email" class="form-label">Email </label>
                    </div>
                </div>
                <div id="error3" class="py-3" style="text-decoration:none; color: red"></div>

                <div class="form-floating col-12">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password" class="form-label">Password</label>
                </div>
                <br>

                <div id="error4" style="text-decoration:none; color: red"></div>


                <div class="py-5">
                    <button class="w-100 btn btn-lg btn-outline-danger fw-bold"
                        style="font-family: Times; font-size: 1.5rem;" type="submit" id='signup'> Sign Up </button>

                    <h5 class="text-white py-3 text-center" style="font-family: Times;"> Already have an account?
                        <a href="http://localhost/Movtic/userloggedIn/login.php" class="px-2"
                            style="text-decoration:none; color: green"> Log In</a>
                    </h5>

                </div>

    </div>
    </form>

    </main>


    </div>

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

</body>

</html>