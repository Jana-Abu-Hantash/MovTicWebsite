<?php

session_start();

$user_id = $_SESSION['UserID'];
$Fname = $_SESSION['FirstName'];
$Lname = $_SESSION['LastName'];

include('moviesData.php');
include('movieGenres.php');
include('movieActors.php');
?>


<html>

<head>
    <title> Movies Information </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style2.css">
    <script src="script.js"></script>
</head>

<body class="container">

    <header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black">
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
                            <a class="nav-link" style="font-size: 1.2rem; font-family: Times;"
                                href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Book a Ticket </a>
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



    <!-- 1. Black Adam -->
    <div class="row container py-5 border-bottom" id="movie1">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/8a48526e-17fe-4581-81e3-33074a48edcd.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_1) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_1) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_1 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_1) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_1 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_1) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_1) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=X0tOpBuYasI&t=1s">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 2. Black Panther: Wakanda Forever -->
    <div class="row container py-5 border-bottom" id="movie2">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/a125c960-d134-4c56-a2d7-e55c1b148dfc.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_2) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_2) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_2 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_2) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_2 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_2) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_2) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=_Z3QKkl1WyM">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 3. Bones and All -->
    <div class="row container py-5 border-bottom" id="movie3">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/3cad6276-fc20-43d6-bca6-5392814c0a4e.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_3) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_3) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_3 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_3) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_3 as $genre) {
                            out("$genre");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_3) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_3) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=baZq_gIwRzQ">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 4. Devotion -->
    <div class="row container py-5 border-bottom" id="movie4">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/ec203e84-72ae-4218-b5d8-054b242989a0.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_4) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_4) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_4 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_4) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_4 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_4) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_4) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=rjqFG2VSxA0">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 5. Lamborghini (The Man Behind The Legend) -->
    <div class="row container py-5 border-bottom" id="movie5">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/e3739c81-59ce-42c8-b4c1-378c528b1b78.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h2 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_5) ?>
                </h2>

                <h3 class="Main_text">
                    <?php out($ageRestriction_5) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_5 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_5) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_5 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    </br>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_5) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_5) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=8fjAktXkHPA">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 6. Poker Face -->
    <div class="row container py-5 border-bottom" id="movie6">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/e5c279f7-6a9f-4970-99ae-117bf9f00b43.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_6) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_6) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_6 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_6) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_6 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_6) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_6) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=X0tOpBuYasI&t=1s">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 7. Prey for the Devil -->
    <div class="row container py-5 border-bottom" id="movie7">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/b9ee36d4-faa5-44ae-820e-f438c18515d2.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_7) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_7) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_7 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_7) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_7 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_7) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_7) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=X0tOpBuYasI&t=1s">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- 8. She Said -->
    <div class="row container py-5 border-bottom" id="movie8">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/fb2d58b3-4852-4e06-b921-60266550085f.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_8) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_8) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_8 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_8) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_8 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    </br>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_8) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_8) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=i5pxUQecM3Y">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <!-- 9. The Menu -->
    <div class="row container py-5" id="movie9">

        <div class="col-md-5 py-5">
            <div class="poster-img">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/1072f6d7-ee8c-4c05-b571-3a604684eef0.jpeg"
                    height="500px" />
            </div>
        </div>

        <div class="Movie_info col-md-7 py-5">
            <div class="row">
                <h1 class='title text-center border-bottom mb-4'>
                    <?php echo strtoupper($movieName_9) ?>
                </h1>

                <h3 class="Main_text">
                    <?php out($ageRestriction_9) ?>
                </h3>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Cast Members: </h3>
                    <h5>
                        <?php foreach ($Actors_9 as $actor) {
                            out($actor);
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Duration: </h3>
                    <h5>
                        <?php out($duration_9) ?>
                    </h5>
                    </p>
                </div>

                <div class="col-md-6">
                    <p>
                    <h3 class="Main_text"> Genres: </h3>
                    <h5>
                        <?php foreach ($genres_9 as $genre) {
                            out("$genre ");
                        } ?>
                    </h5>
                    <h3 class="Main_text"> Release Date: </h3>
                    <h5>
                        <?php out($releaseDate_9) ?>
                    </h5>
                    </p>
                </div>

                <h3 class="Main_text py-2"> Synopsis: </h3>
                <h6>
                    <?php out($synopsis_9) ?>
                </h6>

                <div class="py-4">
                    <a class="Main_btn btn btn-lg" href="https://www.youtube.com/watch?v=Qw8d1a0-VD8">
                        <i class="bi bi-play-circle"></i> Watch Trailer </a>
                    <a class="Main_btn btn btn-lg" href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> <i
                            class="bi bi-ticket-perforated"></i> Get
                        Tickets </a>
                </div>

            </div>
        </div>
    </div>

    </div>

    <div class="container">
        <footer class="py- my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="http://localhost/MovTic/UserLoggedIn/HomePage.html"
                        class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="http://localhost/MovTic/UserLoggedIn/movies_info.php"
                        class="nav-link px-2 text-muted">Movies</a></li>
            </ul>
            <p class="text-center text-muted">&copy MovTic Theater 2022</p>
        </footer>
    </div>

</body>

</html>