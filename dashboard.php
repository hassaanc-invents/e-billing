<?php
include "./connection/connection.php";
check_login($conn);
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
</head>

<body>
    <!-- Navigation -->
    <?php
    include "./components/navigation/navigation.php";
    ?>
    <!-- Dashboard Header -->
    <?php
    include "./components/dashboard-header/dashboard-header.php"
    ?>
    <!-- Dashboard Frontend -->
    <?php
    if ($_SESSION['logged_role'] == 1) {
        // Simple Admin
        include "./pages/dashboard/dashboard-frontend.php";
    } else {
        if ($_SESSION['logged_role'] == 2) {
            // Super Admin
            include "./pages/super-admin/super-admin-frontend.php";
        } else {
            echo "Sorry You are not Authroized";
        }
    }
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