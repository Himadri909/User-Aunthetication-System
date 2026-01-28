<?php
session_start();

// block direct access
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar">
  <div class="logo">Authify</div>

  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Features</a></li>
    <li><a href="#">Security</a></li>
    <li><a href="#">About</a></li>
  </ul>

  <div class="nav-buttons">
    <a href="login.php" class="btn">Login</a>
    <a href="register.php" class="btn">Register</a>
  </div>
</nav>

<div class="container">
    <h2>User Dashboard</h2>
    <p>Welcome, <?php echo $_SESSION['user']; ?></p>

    <a href="logout.php">
        <button class="logout">Logout</button>
    </a>
</div>

</body>
</html>
