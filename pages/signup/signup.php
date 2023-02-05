<!DOCTYPE html>
<html lang="en">

<head>
  <title>E Billing | Check Your Bills of All Pakistani Services</title>
  <!-- Local Link -->
  <link rel="stylesheet" href="/style/navigation.css">
  <link rel="stylesheet" href="/style/login-signup-page.css">
  <?php
  include "./components/bootstrap/bootstrap-head.php";
  include "./components/other-meta-links/meta-links.php";
  ?>
</head>

<body>
  <!-- Navigation -->

  <?php
  include "./components/navigation/navigation.php";
  ?>

  <!-- Login Section -->

  <div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
      <div class="card-header mx-auto bg-dark">
        <span> <img src="/images/wapda/pakistan-wapda-logo.png" class="w-75" alt="Logo"> </span><br />
        <span class="logo_title mt-5"> Signup Dashboard </span>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="input-group form-group rounded">
            <input type="text" name="email" class="form-control rounded" placeholder="Name">
          </div>
          <div class="input-group form-group">
            <input type="password" name="password" class="form-control rounded" placeholder="email">
          </div>
          <div class="input-group form-group">
            <input type="password" name="password" class="form-control rounded" placeholder="password">
          </div>
          <div class="form-group">
            <input type="submit" name="btn" value="Signup" class="btn btn-outline-danger float-right login_btn">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript Link -->

  <?php
  include "./components/bootstrap/bootstrap-javascript-foot.php";
  ?>
  
  </body>
</html>