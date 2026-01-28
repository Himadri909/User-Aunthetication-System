<?php
session_start();
include 'conn.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $run = mysqli_query($conn, $query);

    if (mysqli_num_rows($run) == 1) {
        $_SESSION['user'] = $email; // store user
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
     <link rel="stylesheet" href="style.css">
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
    <h2>Login</h2>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>
    </form>

      <div class="link">Don't have an account?<span><a href="register.php">Register here</span></a></div>
</div>

</body>
</html>
