<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

include "db.php";

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
       <header id="header">
        <img src="study.jpg" class="study" alt="Study Circle">
        <button id="menubtn">☰</button>
        <nav id="navbar">
                    <a href="index.html" class="active"><i class="fa-solid fa-house"></i></a>
                    <a href="registration.html"><i class="fa-solid fa-laptop"></i>Register/Login</a>
                    <a href="contact.html"><i class="fa-solid fa-phone"></i>Contact Us</a>
                    <button id="theme"><i class="fa-solid fa-moon"></i></button>
        </nav>
        </header>

        <div class="dashboard">
<h1>Hello, <?php echo $_SESSION['name']; ?> 👋</h1>

    <h2>Welcome back to StudyCircle</h2>
    <h2>👤 Student Profile</h2>

    <p><strong>Name:</strong> <?php echo $user['name']; ?></p>

    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>

    <p><strong>Mobile:</strong> <?php echo $user['mobile']; ?></p>

    <p><strong>Date of Birth:</strong> <?php echo $user['dob']; ?></p>

    <br>

    <button id="logoutBtn"><a href="logout.php" style="color: white;">Logout</a></button>
    </div>
    <footer class="footer">

  <div class="footer-container">

    <div class="footer-column">
      <h3>About</h3>
      <a href="index.html">About Us</a>
      <a href="blog.html">Blog</a>
      <a href="careers.html">Careers</a>
      <a href="privacypolicy.html">Privacy Policy</a>
      <a href="contact.html">Contact Us</a>
    </div>

    <div class="footer-column">
      <h3>Courses</h3>
      <a href="jeetest.html">JEE Test Series</a>
      <a href="neettest.html">NEET Test Series</a>
      <a href="OlympiadsCourse.html">International Olympiads Course</a>
      <a href="Classroom.html">Classroom Courses</a>
    </div>

    <div class="footer-column">
      <h3>Help & Support</h3>
      <a href="refundpolicy.html">Refund Policy</a>
      <a href="termsconditions.html">Terms & Conditions</a>
      <a href="faqs.html">FAQs</a>
      <a href="contactsupport.html">Contact Support</a>
    </div>

    <div class="footer-column">
      <h3>Popular Goals</h3>
      <a href="neetcoaching.html">NEET Coaching</a>
      <a href="jeecoaching.html">JEE Coaching</a>
      <a href="olympiadCoaching.html">Olympiad Coaching</a>
      <a href="612Coaching.html">6th to 12th Coaching</a>
    </div>

  </div>

  <div class="footer-bottom">
    <p>© 2026 Study Circle. All Rights Reserved.</p>
  </div>

</footer>
<script src="script.js"></script>
    </body>
</html>