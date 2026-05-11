<?php
$conn = new mysqli("localhost", "root", "", "bus_pass_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>