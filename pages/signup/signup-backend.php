<?php
// Connection to DataBase
include "../../connection/connection.php";
// Insertion Started
if (isset($_POST['signup'])) {
    $contact_detail = array($_POST['name'], $_POST['phone'], $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);
    $query = "INSERT INTO admin_information(admin_name, phone_number, admin_email, admin_password, isActive) VALUES('{$contact_detail[0]}','{$contact_detail[1]}','{$contact_detail[2]}','{$password}','0')";
    $result = mysqli_query($conn, $query) or die("INSERTION FAILD");
    header("Location: $baseURL/signup.php");
}
?>