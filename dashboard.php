<?php
include "./connection/connection.php";
check_login($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
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
    <!-- Dashboard Frontend -->
    <?php
    include "./pages/dashboard/dashboard-frontend.php";
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