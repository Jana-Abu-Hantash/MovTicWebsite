<?php
ini_set('display_errors', 1);
include('db.php');
include('includes.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} 

$query = "SELECT * FROM movies";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();

    // Black Adam
    $row = $result->fetch_row(); 
    $movieName_1 = $row[0];
    $releaseDate_1 = $row[1];
    $duration_1 = $row[2];
    $ageRestriction_1 = $row[3];
    $synopsis_1 = $row[4];

    // Black Panther: Wakanda Forever
    $row = $result->fetch_row(); 
    $movieName_2 = $row[0];
    $releaseDate_2 = $row[1];
    $duration_2 = $row[2];
    $ageRestriction_2 = $row[3];
    $synopsis_2 = $row[4];

    // Bones and All
    $row = $result->fetch_row(); 
    $movieName_3 = $row[0];
    $releaseDate_3 = $row[1];
    $duration_3 = $row[2];
    $ageRestriction_3 = $row[3];
    $synopsis_3 = $row[4];
 
    // Devotion
    $row = $result->fetch_row(); 
    $movieName_4 = $row[0];
    $releaseDate_4 = $row[1];
    $duration_4 = $row[2];
    $ageRestriction_4 = $row[3];
    $synopsis_4 = $row[4];

    // Lamborghini (The Man Behind The Legend)
    $row = $result->fetch_row(); 
    $movieName_5 = $row[0];
    $releaseDate_5 = $row[1];
    $duration_5 = $row[2];
    $ageRestriction_5 = $row[3];
    $synopsis_5 = $row[4];

    // Poker Face
    $row = $result->fetch_row(); 
    $movieName_6 = $row[0];
    $releaseDate_6 = $row[1];
    $duration_6 = $row[2];
    $ageRestriction_6 = $row[3];
    $synopsis_6 = $row[4];

    // Prey for the Devil
    $row = $result->fetch_row();
    $movieName_7 = $row[0];
    $releaseDate_7 = $row[1];
    $duration_7 = $row[2];
    $ageRestriction_7 = $row[3];
    $synopsis_7 = $row[4];

    // She Said
    $row = $result->fetch_row(); 
    $movieName_8 = $row[0];
    $releaseDate_8 = $row[1];
    $duration_8 = $row[2];
    $ageRestriction_8 = $row[3];
    $synopsis_8 = $row[4];

    // The Menu
    $row = $result->fetch_row(); 
    $movieName_9 = $row[0];
    $releaseDate_9 = $row[1];
    $duration_9 = $row[2];
    $ageRestriction_9 = $row[3];
    $synopsis_9 = $row[4];
}

// $query2 = "SELECT genre FROM genres WHERE Movie_Name = 'Black Adam' ";

// if ($stmt = $mysqli->prepare($query2)) {

//     $stmt->execute();
//     $result = $stmt->get_result();
//     $num_rows = $result->num_rows;

//     echo $num_rows;

//     $genres_1 = [];
//     for ($i = 0; $i < $num_rows; $i++) {
//         $genres_1[$i] = $row[2];

//     }

//     foreach ($genres_1 AS $genre) {
//         echo "$genre ";
//     }
// }



//     $row2 = $result->fetch_row();

//     $movieName_2 = $row2[0];
//     $releaseDate_2 = $row2[1];
//     $duration_2 = $row2[2];
//     $ageRestriction_2 = $row2[3];
//     $synopsis_2 = $row2[5];

//     echo "$movieName_2 </br>"; 

//     $row3 = $result->fetch_row();
//     $row4 = $result->fetch_row();
//     $row5 = $result->fetch_row();
//     $row6 = $result->fetch_row();
//     $row7 = $result->fetch_row();
//     $row8 = $result->fetch_row();
//     $row9 = $result->fetch_row();

// }

// $query2 = "SELECT Actor FROM cast_members WHERE Movie_Name = 'Bones and All'";

// if ($stmt = $mysqli->prepare($query2)) {

//     $stmt->execute();
//     $result = $stmt->get_result();
//     $num_rows = $result->num_rows;

//     $Actors_1 = [];
//     for ($i = 0; $i < $num_rows; $i++) {
//         $row = $result->fetch_row();
//         $Actors_1[$i] = $row[0];
//     }
// }

$mysqli->close();
?>