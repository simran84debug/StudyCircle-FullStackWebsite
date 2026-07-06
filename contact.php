<?php
include "db.php";
$course = trim($_POST['course']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$sql = "INSERT INTO contact_messages (course, name, email, message)
VALUES ('$course', '$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Message Sent Successfully!');
    window.location.href='contact.html';
    </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>