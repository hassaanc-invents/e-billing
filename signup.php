<?php
// Logout if Already Logged
include "./destroy-session/destroy-session.php"
?>
<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
    <link rel="stylesheet" href="./style/login-signup-page.css">
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
    <!-- Markup -->
    <?php
    include "./pages/signup/signup-frontend.html"
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