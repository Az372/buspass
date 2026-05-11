<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Welcome to Bus Pass System</h2>

    <p>You are logged in</p>

    <a href="apply.php">Apply for Bus Pass</a>
    <br><br>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>