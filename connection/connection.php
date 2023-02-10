<?php
$conn = mysqli_connect("localhost","root","","wapda-billing");
$baseURL = "http://localhost/e-billing";
function check_login($conn)
    {
        session_start();
      if(isset($_SESSION['logged_username']))
      {
          $id= $_SESSION['admin_id'];
          $query = "SELECT * FROM admin_information WHERE admin_id = '$id' LIMIT 1";
          $result= mysqli_query($conn , $query);
          if($result && mysqli_num_rows($result) >0)
          {
           $userdata = mysqli_fetch_assoc($result);
           return $userdata;
          }
      } else {
      header('Location:login');
      die;
}
}
