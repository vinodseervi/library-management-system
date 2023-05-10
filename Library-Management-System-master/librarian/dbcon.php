<?php
$db_host = "localhost";
$db_user = "antaragupta25@gmail.com";
$db_pass = "Antara@2002";
$db_name = "eb_lms";

// Create a new mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Select database
mysqli_select_db($mysqli, $db_name);
?>