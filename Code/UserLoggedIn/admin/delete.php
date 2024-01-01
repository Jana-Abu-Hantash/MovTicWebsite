<?php

ini_set('display_errors', 1);
include('db.php');

// create the connection 
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

if (isset($_GET["Name"])) {

    $name = $_GET["Name"];
    $Release_Date = $_GET["Release_Date"];

    $query = "DELETE FROM movies WHERE Name = '$name' AND Release_Date = '$Release_Date' ";
    $result = $mysqli->query($query);

    header("location: MainPage.php"); 
    exit;


}


?>