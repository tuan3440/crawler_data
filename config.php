<?php

$servername = "localhost";
$username = "root";
$password = "20173440";
$dbname = "crawler_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$conn->set_charset("utf8");
if ($conn->connect_error) {
   
    die("Connection failed: " . $conn->connect_error);
}
