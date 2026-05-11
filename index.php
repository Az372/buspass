<!DOCTYPE html>
<html>
<head>
    <title>BusPass</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="logo"> BusPass</div>
    <nav>
        <a href="#">Home</a>
        <a href="login.php">Login</a>
        <a href="#register">Register</a>
        <a href="booking_history.php"> History</a>
    </nav>
</header>

<section class="hero">
    <div class="overlay">
        <h1>Travel Smart, Travel Easy</h1>
        <p>Book bus tickets & manage your pass in seconds</p>
    </div>
</section>

<section class="search-section">
    <form class="search-box" action="apply.php" method="POST" onsubmit="return validateForm()">

        <select id="route" name="route">
            <option value="">Select Route</option>
            <option>Pune → Mumbai</option>
            <option>Mumbai → Nashik</option>
            <option>Pune → Nagpur</option>
            <option>Nashik → Pune</option> 
            <option>Mumbai → Kolhapur</option>
        </select>

        <input type="date" id="date" name="date">

        <select id="time" name="time">
            <option value="">Select Time</option>
            <option>06:00 AM</option>
            <option>09:00 AM</option>
            <option>11:00AM</option>
            <option>01:00PM</option>
            <option>06:00 PM</option>
        </select>

        <button type="submit">Search</button>
    </form>

    <p id="error"></p>
</section>

<section class="offers">
    <h2>🔥 Trending Offers</h2>

    <div class="offer-grid">
        <div class="offer-card bg1">
            <h3>20% OFF </h3>
            <p> First booking</p>
        </div>

        <div class="offer-card bg2">
            <h3>Weekend Sale </h3>
            <p> Extra savings</p>
        </div>

        <div class="offer-card bg3">
            <h3>Student Pass </h3>
            <p> Special discount</p>
        </div>

        <div class="offer-card bg4">
            <h3>Monthly Plan</h3>
            <p> Best for daily travel</p>
        </div>
    </div>
</section>

<section class="register" id="register">
    <h2>Create Your Account</h2>

    <form action="register.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>
    </form>
</section>

<footer>
    <p>© 2026 BusPass | Designed professionally</p>
</footer>

<script>
function validateForm() {
    let r = document.getElementById("route").value;
    let d = document.getElementById("date").value;
    let t = document.getElementById("time").value;

    if(r=="" || d=="" || t==""){
        document.getElementById("error").innerText = "Please fill all fields";
        return false;
    }
    return true;
}
</script>

</body>
</html>