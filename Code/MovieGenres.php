<?php
ini_set('display_errors', 1);
include('db.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
 
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Black Adam' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_1 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_1[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Black Panther: Wakanda Forever' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_2 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_2[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Bones and All' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_3 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_3[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Devotion' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_4 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_4[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Lamborghini (The Man Behind The Legend)' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_5 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_5[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Poker Face' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_6 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_6[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'Prey for the Devil' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_7 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_7[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'She Said' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_8 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_8[$i] = $row[0];
    }
}

$query = "SELECT genre FROM genres WHERE Movie_Name = 'The Menu' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $genres_9 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $genres_9[$i] = $row[0];
    }
}

$mysqli->close();
?>