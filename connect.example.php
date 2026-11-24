
<?php

$servername = "localhost";
$username = "your_name";
$password = "your_pass";
$dbname = "your_db";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if ($conn->connect_error) {
    die("Connection Failed");
}

?>

