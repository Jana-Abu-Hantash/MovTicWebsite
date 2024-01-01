<?php
ini_set('display_errors', 1);
include('db.php');

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
 
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Black Adam' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_1 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_1[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Black Panther: Wakanda Forever' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_2 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_2[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Bones and All' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_3 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_3[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Devotion' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_4 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_4[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Lamborghini (The Man Behind The Legend)' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_5 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_5[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Poker Face' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_6 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_6[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'Prey for the Devil' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_7 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_7[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'She Said' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_8 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_8[$i] = $row[0];
    }
}

$query = "SELECT actor FROM cast_members WHERE Movie_Name = 'The Menu' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;

    $Actors_9 = [];
    for ($i = 0; $i < $num_rows; $i++) {
        $row = $result->fetch_row();
        $Actors_9[$i] = $row[0];
    }
}

$mysqli->close();
?>