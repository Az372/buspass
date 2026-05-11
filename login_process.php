<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

// safer query check
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query failed: " . mysqli_error($conn));
}

if(mysqli_num_rows($result) == 1){

    $row = mysqli_fetch_assoc($result);

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['name'] = $row['name'];

    // GO TO HOME PAGE
    header("Location: index.php");
    exit();

} else {
    echo "<script>
        alert('Invalid email or password');
        window.location.href='login.php';
    </script>";
}
?>