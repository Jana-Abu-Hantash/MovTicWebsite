<?php
    session_start();

    $user_id = $_SESSION['UserID'];
    $Fname = $_SESSION['FirstName'];
    $Lname = $_SESSION['LastName'];

?>

<html>

<head>
    <title> WELCOME </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <script defer src="script.js"></script>
    
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
                            <a class="nav-link" style="font-size: 1.2rem; font-family: Times;"
                                href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Book a Ticket </a>
                        </li>

                    </ul>

                    <h3 style="font-size: 1.2rem; font-family: Times; color: white;" class = "px-3" > <?php echo $Fname . " " . $Lname; ?> <i class="bi bi-person-circle text-white px-3"></i> </h3> 

                    <form class="d-flex gap-4 py-2">
                        <a class="btn px-5" style="background-color: rgb(130, 48, 56); color: white; font-size: 1rem; font-family: Times;" href="http://localhost/MovTic/HomePage.html" onclick="handleClick(this)"> Log Out</a>                        
                    </form>

                </div>

            </div>
        </nav>

    </header>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item">

                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/d84b0c17-3a35-4e62-9337-4517cd0fec63.jpeg"
                    class="bd-placeholder-img" width="100%" aria-hidden="true" focusable="false" />
                <div class="container">
                    <div class="carousel-caption text-start">
                        <p><a class="btn btn-lg btn-success" href="https://www.youtube.com/watch?v=baZq_gIwRzQ"> <i
                                    class="bi bi-play-circle-fill"></i> Play
                                Trailer</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/fb157c82-72e9-485b-a925-f416cd520eb5.jpeg"
                    class="bd-placeholder-img" width="100%" aria-hidden="true" focusable="false" />
                <div class="container">
                    <div class="carousel-caption text-start">
                        <p><a class="btn btn-lg btn-success" href="https://www.youtube.com/watch?v=_Z3QKkl1WyM"> <i
                                    class="bi bi-play-circle-fill"></i> Play
                                Trailer</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://d3es5bqloyicro.cloudfront.net/images/films/1620e643-f992-4744-bce2-e2de6b31c92b.jpeg"
                    class="bd-placeholder-img" width="100%" aria-hidden="true" focusable="false" />
                <div class="container">
                    <div class="carousel-caption text-start">
                        <p><a class="btn btn-lg btn-success" href="https://www.youtube.com/watch?v=Qw8d1a0-VD8"> <i
                                    class="bi bi-play-circle-fill"></i> PLay
                                Trailer </a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="Title">
        <h2 class="border-bottom"> MOVIES SHOWING NOW </h2>
    </div>


    <section class="movies">

        <div class="movies-container">

            <!-- Poster #1 -->
            <div class="poster" id="image1">
                <div class="poster-img" >
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/3cad6276-fc20-43d6-bca6-5392814c0a4e.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> Bones and All </h2>
                    <h6> R18 | Drama Horror </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=baZq_gIwRzQ">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie3"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #2 -->
            <div class="poster">
                <div class="poster-img" id="image2">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/a125c960-d134-4c56-a2d7-e55c1b148dfc.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h4> Black Panther:
                        <br /> Wakanda Forever
                    </h4>
                    <h8> PG12 | Adventure Action </h8>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=_Z3QKkl1WyM">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie2"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #3 -->
            <div class="poster" id="image3">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/fb2d58b3-4852-4e06-b921-60266550085f.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> She Said </h2>
                    <h6> R18 | Drama </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=i5pxUQecM3Y">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie8"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #4 -->
            <div class="poster" id="image4">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/1072f6d7-ee8c-4c05-b571-3a604684eef0.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> The Menu </h2>
                    <h6> R18 | Thriller Comedy </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=Qw8d1a0-VD8">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie9"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #5 -->
            <div class="poster" id="image5">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/ec203e84-72ae-4218-b5d8-054b242989a0.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> Devotion </h2>
                    <h6> R15 | Action </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=rjqFG2VSxA0">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie4"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #6 -->
            <div class="poster" id="image6">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/8a48526e-17fe-4581-81e3-33074a48edcd.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> Black Adam </h2>
                    <h6> PG12 | SciFi Fantasy </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3"
                                href="https://www.youtube.com/watch?v=X0tOpBuYasI&t=1s">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie1"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #7 -->
            <div class="poster" id="image7">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/e3739c81-59ce-42c8-b4c1-378c528b1b78.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> Lamborghini</h2>
                    <h6> R15| Drama Biography </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=8fjAktXkHPA">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie5"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #8 -->
            <div class="poster" id="image8">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/e5c279f7-6a9f-4970-99ae-117bf9f00b43.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h2> Poker Face </h2>
                    <h6> R18| Crime Thriller </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3"
                                href="https://www.youtube.com/watch?v=dFhPexVP1xU&t=2s">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie6"> Movie Info </a>
                    </div>

                </div>
            </div>

            <!-- Poster #9 -->
            <div class="poster" id="image9">
                <div class="poster-img">
                    <img
                        src="https://d3es5bqloyicro.cloudfront.net/images/films/b9ee36d4-faa5-44ae-820e-f438c18515d2.jpeg" />
                </div>

                <div class="px-2 poster-text">
                    <h3> Prey for the Devil </h3>
                    <h6> R15| Horror Thriller </h6>

                    <div class="py-3 px-2">
                        <div class="px-3">
                            <a class="btn btn-primary mb-2 px-3" href="https://www.youtube.com/watch?v=OkEnG6inG4c">
                                <i class="bi bi-play-circle"></i> Watch Trailer </a>
                        </div>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/BookTickets.php"> Get Tickets </a>
                        <a class="btn btn-sm btn-outline-primary"
                            href="http://localhost/MovTic/UserLoggedIn/movies.php#movie7"> Movie Info </a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <div class="text-center py-4">
        <p>
            <a class="btn btn-lg" style="background-color: rgb(130, 48, 56); color: white; font-family: Times;"
                href="http://localhost/MovTic/UserLoggedIn/movies_info.php"> More About The Movies</a>
        </p>
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