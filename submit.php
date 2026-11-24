<?php

include "connect.php";

$firstname = $_POST['firstname'] ?? '';
$lastname  = $_POST['lastname'] ?? '';
$course    = $_POST['course'] ?? '';
$gender    = $_POST['gender'] ?? '';
$phone     = $_POST['phone'] ?? '';
$address   = $_POST['address'] ?? '';

$sql = "INSERT INTO students
(
firstname,
lastname,
course,
gender,
phone,
address
)

VALUES
(
'$firstname',
'$lastname',
'$course',
'$gender',
'$phone',
'$address'
)";

if($conn->query($sql) === TRUE){

    echo "<h2>Enrollment Successful!</h2>";

}
else{

    echo "Error: " . $conn->error;

}

$conn->close();

?>