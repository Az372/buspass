<?php
$route = $_POST['route'];
$date = $_POST['date'];
$time = $_POST['time'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Bus - BusPass</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR SAME -->
<header class="navbar">
    <div class="logo"> BusPass</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
    </nav>
</header>
 <div class="nav-buttons">
    <button class="back-btn" onclick="history.back()"> Back</button>
    <a href="index.php">
        <button class="home-btn"> Home</button>
    </a>
</div>


<!-- MAIN SECTION -->
<section class="bus-section">

    <h2>Available Buses</h2>

    <div class="search-info">
        <p><b>Route:</b> <?php echo $route; ?></p>
        <p><b>Date:</b> <?php echo $date; ?></p>
        <p><b>Time:</b> <?php echo $time; ?></p>
    </div>

    <div class="bus-grid">

        <!-- BUS CARD -->
        <div class="bus-card">
            <h3>Shivneri Express</h3>
            <p>AC | Comfortable Seats</p>
            <p class="price">₹500</p>

            <form action="seat.php" method="POST">
                <input type="hidden" name="route" value="<?php echo $route; ?>">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="bus" value="Shivneri Express">

                <button>Select Seat</button>
            </form>
        </div>

        <div class="bus-card">
            <h3>MSRTC Semi Luxury</h3>
            <p>Non-AC | Budget Travel</p>
            <p class="price">₹300</p>

            <form action="seat.php" method="POST">
                <input type="hidden" name="route" value="<?php echo $route; ?>">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="bus" value="MSRTC Semi Luxury">

                <button>Select Seat</button>
            </form>
        </div>

        <div class="bus-card">
            <h3>Volvo Sleeper</h3>
            <p>AC | Sleeper Coach</p>
            <p class="price">₹800</p>

            <form action="seat.php" method="POST">
                <input type="hidden" name="route" value="<?php echo $route; ?>">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="bus" value="Volvo Sleeper">

                <button>Select Seat</button>
            </form>
        </div>

    </div>
    

</section>

</body>
</html>