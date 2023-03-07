<?php
// Logout if Already Logged
include "./destroy-session/destroy-session.php";
include "./connection/connection.php";
include "./web-crawler/web-crawler.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E Billing | Check Your Bills of All Pakistani Services</title>
  <link rel="shortcut icon" href="./images/wapda/ebillpk-logo.png" type="image/x-icon">
  <?php
  include "./components/bootstrap/bootstrap-head.php";
  include "./components/other-meta-links/meta-links.php";
  ?>
   <!-- Local Link -->
   <link rel="stylesheet" href="./style/navigation.css">
  <link rel="stylesheet" href="./style/login-signup-page.css">
</head>
<body>
  <!-- Navigation -->
  <?php
  include "./components/navigation/navigation.php";
  ?>
  <!-- Login Frontend -->
  <?php
  include "./pages/login/login-frontend.html";
  ?>
  <!-- Footer -->
  <?php
  include "./components/footer/footer.php";
  ?>
  <!-- Bootstrap JavaScript Link -->
  <?php
  include "./components/bootstrap/bootstrap-javascript-foot.php";
  ?>
</body>
</html>