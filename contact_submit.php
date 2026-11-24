<?php

include "connect.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

$sql = "INSERT INTO contact_messages
        (name, email, subject, message)
        VALUES
        ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {

    echo "<h2>Message Sent Successfully!</h2>";
    echo "<p>Thank you for contacting us.</p>";

} else {

    echo "Error: " . $conn->error;

}

$conn->close();

?>