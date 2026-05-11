<?php
session_start();
include "db.php";

// HANDLE SEATS (array + string fix)
if (isset($_POST['seat'])) {
    if (is_array($_POST['seat'])) {
        $seat = implode(",", $_POST['seat']);
        $seatCount = count($_POST['seat']);
    } else {
        $seat = $_POST['seat'];
        $seatCount = count(explode(",", $seat));
    }
} else {
    $seat = "";
    $seatCount = 0;
}

// OTHER DATA
$bus = $_POST['bus'];
$route = $_POST['route'];
$date = $_POST['date'];

// PRICE CALCULATION
$pricePerSeat = 200;
$totalAmount = $seatCount * $pricePerSeat;

// INSERT WHEN PAY NOW CLICKED
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pay'])) {

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO bookings (user_id, bus_type, seats)
            VALUES ('$user_id', '$bus - $route ($date)', '$seat')";

    mysqli_query($conn, $sql);

    $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment - BusPass</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
    <div class="logo">BusPass</div>
</header>

<!-- BUTTONS -->
<div class="nav-buttons">
    <button class="back-btn" onclick="history.back()"> Back</button>
    <a href="index.php">
        <button class="home-btn"> Home</button>
    </a>
</div>

<!-- PAYMENT SECTION -->
<section class="payment-section">

    <div class="payment-box">

        <h2>Complete Your Payment</h2>

        <!-- BOOKING INFO -->
        <div class="booking-info">
            <p><b>Bus:</b> <?php echo $bus; ?></p>
            <p><b>Route:</b> <?php echo $route; ?></p>
            <p><b>Date:</b> <?php echo $date; ?></p>
            <p><b>Seats:</b> <?php echo $seat; ?></p>
            <p><b>Total Seats:</b> <?php echo $seatCount; ?></p>
            <p><b>Total Amount:</b> ₹<?php echo $totalAmount; ?></p>
        </div>

        <h3>Select Payment Method</h3>

        <!-- FORM -->
        <form method="POST">

            <!-- KEEP DATA -->
            <input type="hidden" name="seat" value="<?php echo $seat; ?>">
            <input type="hidden" name="bus" value="<?php echo $bus; ?>">
            <input type="hidden" name="route" value="<?php echo $route; ?>">
            <input type="hidden" name="date" value="<?php echo $date; ?>">

            <label class="pay-option">
                <input type="radio" name="pay" value="UPI" required> UPI
            </label>

            <label class="pay-option">
                <input type="radio" name="pay" value="Card"> Debit / Credit Card
            </label>

            <label class="pay-option">
                <input type="radio" name="pay" value="Cash"> Cash
            </label>

            <button class="pay-btn" type="submit">Pay Now</button>

        </form>

        <!-- SUCCESS MESSAGE -->
        <?php if(isset($success)) { ?>
            <div class="success-box" style="display:block; margin-top:10px;">
                <p>✅ Payment Successful! Booking Confirmed</p>
            </div>
            <a href="booking_history.php" style="display:block; margin-top:10px;">
                    <button class="home-btn">View History</button>
            </a>
        <?php } ?>

    </div>

</section>

</body>
</html>