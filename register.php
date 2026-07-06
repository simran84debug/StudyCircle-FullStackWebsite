<?php

include "db.php";
$name = trim($_POST['name']);
$mobile = trim($_POST['mobile']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$dob = $_POST['dob'];
$check = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {

    echo "Email already registered!";
    exit();

}
$sql = "INSERT INTO users (name, mobile, email, password, dob)
        VALUES ('$name', '$mobile', '$email', '$password', '$dob')";

if (mysqli_query($conn, $sql)) {

    echo "<script>
    alert('Registration Successful!');
    window.location.href='registration.html';
    </script>";

} else {

    echo "Error: " . mysqli_error($conn);

}
mysqli_close($conn);

?>