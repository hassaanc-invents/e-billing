<?php
include "../../connection/connection.php";
session_start();
session_unset();
session_destroy();
if (isset($_POST['login-submit'])) {
    $loginEmail = mysqli_real_escape_string($conn, $_POST["login-email"]);
    $userPassword = mysqli_real_escape_string($conn, $_POST["login-password"]);
    $userPassword = md5($userPassword);
    $credentialquery = "SELECT * FROM admin_information WHERE admin_email='{$loginEmail}' AND admin_password='{$userPassword}' AND isActive='1'";
    $checkSuperAdminQuery = "SELECT * FROM admin_information WHERE admin_email='{$loginEmail}' AND admin_password='{$userPassword}' AND isActive='2'";
    $runLoginQuery = mysqli_query($conn, $credentialquery) or die("Incorrect Email or Password");
    if (mysqli_num_rows($runLoginQuery) > 0) {
        while ($userrow = mysqli_fetch_assoc($runLoginQuery)) {
            session_start();
            $_SESSION['admin_id'] = $userrow['admin_id'];
            $_SESSION['logged_username'] = $userrow['admin_email'];
            if (isset($_SESSION['logged_username'])) {
                header("Location: $baseURL/dashboard");
            }
        }
    } else {
    $runSuperAdminQuery = mysqli_query($conn, $checkSuperAdminQuery);
    if (mysqli_num_rows($runSuperAdminQuery) > 0){
        while ($singleSuperAdmin = mysqli_fetch_assoc($runSuperAdminQuery)) {
            session_start();
            $_SESSION['admin_id'] = $singleSuperAdmin['admin_id'];
            $_SESSION['logged_username'] = $singleSuperAdmin['admin_email'];
            if (isset($_SESSION['logged_username'])) {
                header("Location: $baseURL/super-admin");
            }
        }
    } else{
        header("Location: $baseURL/login");
    }
    }
}
?>