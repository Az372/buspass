<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM bookings WHERE user_id='$user_id' ORDER BY booking_date DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking History - BusPass</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background: #f4f6f9;
        }

        .history-container {
            width: 85%;
            margin: auto;
            margin-top: 40px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #ef4444;   /* matching offer card vibe */
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f1f1f1;
        }

        /* TOP BUTTON */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .home-btn {
            background: #ef4444;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
             margin-right: 85px;
        }

        .home-btn:hover {
            background: #ef4444;
        }
    </style>
</head>

<body>

<div class="history-container">

    <!-- TOP BAR -->
    <div class="top-bar">
        <h2> My Booking History</h2>
        <a class="home-btn" href="index.php">Home</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Bus Type</th>
            <th>Seats</th>
            <th>Booking Date</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['bus_type']}</td>
                        <td>{$row['seats']}</td>
                        <td>{$row['booking_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No bookings found</td></tr>";
        }
        ?>

    </table>

</div>

</body>
</html>