<?php
$servername = "localhost";
$username = "root";      // default for XAMPP
$password = "";          // leave empty unless you set one
$database = "db_calacala"; // your database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>