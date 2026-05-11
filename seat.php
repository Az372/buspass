<?php
$bus = $_POST['bus'];
$route = $_POST['route'];
$date = $_POST['date'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Seat - BusPass</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="logo"> BusPass</div>
</header>

<div class="nav-buttons">
    <button class="back-btn" onclick="history.back()"> Back</button>
    <a href="index.php">
        <button class="home-btn"> Home</button>
    </a>
</div>

<section class="seat-section">

    <h2>Select Your Seat</h2>

    <div class="seat-info">
        <p><b>Bus:</b> <?php echo $bus; ?></p>
        <p><b>Route:</b> <?php echo $route; ?></p>
        <p><b>Date:</b> <?php echo $date; ?></p>
    </div>

    <form action="confirm.php" method="POST">

        <!-- SEAT GRID -->
        <div class="seat-grid">

            <?php
            for($i=1; $i<=20; $i++){
                echo "<label class='seat'>
                        <input type='checkbox' name='seat[]' value='$i'>
                        <span>$i</span>
                      </label>";
            }
            ?>

        </div>

        <!-- PASS DATA -->
        <input type="hidden" name="bus" value="<?php echo $bus; ?>">
        <input type="hidden" name="route" value="<?php echo $route; ?>">
        <input type="hidden" name="date" value="<?php echo $date; ?>">

        <button class="book-btn">Book Now</button>

    </form>

</section>

</body>
</html>