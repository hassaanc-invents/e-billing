<!-- Login Section -->

<div class="container">
  <div class="card card-login mx-auto text-center bg-dark">
    <div class="card-header mx-auto bg-dark">
      <span> <img src="./images/wapda/pakistan-wapda-logo.png" class="w-75" alt="Logo"> </span><br />
      <span class="logo_title mt-5"> Signup Dashboard </span>
    </div>
    <div class="card-body">
      <form action="./pages/signup/signup-backend.php" method="post">
        <div class="input-group form-group rounded">
          <input type="text" name="name" class="form-control rounded" placeholder="Name" required>
        </div>
        <div class="input-group form-group">
          <input type="email" name="email" class="form-control rounded" placeholder="Email" required>
        </div>
        <div class="input-group form-group">
          <input type="number" name="phone" class="form-control rounded" placeholder="Phone Number" required>
        </div>
        <div class="input-group form-group">
          <input type="password" name="password" class="form-control rounded" placeholder="password" required>
        </div>
        <div class="form-group text-left">
          <label for="note" class="text-danger"><b>Note:</b> After submitting your Signup Data, your request will be reviewed by the Super Admin then your Account will be Verfied and You will be able to login to the system.</label>
        </div>
        <div class="form-group">
          <button type="submit" name="signup" value="signup" class="btn btn-outline-danger float-right login_btn">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</div>