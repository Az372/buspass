<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password, role)
VALUES ('$name', '$email', '$password', 'user')";

if ($conn->query($sql)) {
    header("Location: login.php");
exit();
} else {
    echo "Error: " . $conn->error;
}
?>