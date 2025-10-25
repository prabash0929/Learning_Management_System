<?php
$host = "localhost";
$user = "root"; // your DB username
$pass = "";     // your DB password
$dbname = "lerning_managment_system";

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
