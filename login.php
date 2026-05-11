<!DOCTYPE html>
<html>
<head>
    <title>Login - BusPass</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="logo">BusPass</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="index.php#register">Register</a>
    </nav>
</header>

<section class="login-section">
    <div class="login-box">
        <h2>Welcome Back 👋</h2>=7
        <p>Login to continue your journey</p>

        <form action="login_process.php" method="POST">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</section>

</body>
</html>