<?php
include "conn.php";

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    if ($password != $cpassword) {
        echo "<script>alert('Passwords do not match')</script>";
    } else {

        $query = "INSERT INTO users 
        (first_name, second_name, email, password, contact, gender)
        VALUES ('$fname', '$lname', '$email', '$password', '$contact', '$gender')";

        $run = mysqli_query($conn, $query);

        if ($run) {
            echo "<script>alert('Register Successful')</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Authify</title>
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
    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="fname" placeholder="First Name"  required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
         <div class="password-box">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i id="icon" class="fa-solid fa-eye"></i>
        </div>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>
        <input type="text" name="contact" placeholder="Contact" required>
        <select name="gender" required>
            <option>Select Gender</option>
            <option>Female</option>
            <option>Male</option>
        </select>
        <button name="submit">Submit</button>
        </form>
    <div class="link">Already have an account?<span><a href="login.php">Login here</span></a></div>
  </div>  
  <script src="script.js"></script>
</body>
</html>