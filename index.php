<!DOCTYPE html>
<html lang="en">

<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <?php
    include "./components/bootstrap/bootstrap-head.php";
    include "./components/other-meta-links/meta-links.php";
    ?>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
    <link rel="stylesheet" href="./style/main-section.css">
    <link rel="stylesheet" href="./style/whatsapp-button.css">
    <link rel="stylesheet" href="./style/main-page-cards.css">
</head>

<body>
    <!-- Navigation -->
    <?php
    include "./components/navigation/navigation.php";
    ?>
    <!--- Whatsapp Button -->
    <?php
    include "./components/whatsapp-button/whatsapp-button.php";
    ?>
    <!-- Main Section -->
    <?php
    include "./components/main-home-section/main-home-section.php";
    ?>
    <!-- Global Form -->
    <?php
    include "./components/global-form/main-global-form-frontend.html";
    ?>
    <!-- Cards Section -->
    <?php
    include "./components/main-page-cards/main-page-cards.php";
    ?>
    <!-- Home Page Blog -->
    <?php
    include "./pages/home/home-page-frontend.php";
    ?>
    <!-- Footer Include -->
    <?php
    include "./components/footer/footer.php";
    ?>
    <!-- JavaScript -->
    <script src="./javascript/home/home.js"></script>
    <!-- Bootstrap JavaScript Link -->
    <?php
    include "./components/bootstrap/bootstrap-javascript-foot.php";
    ?>
</body>

</html>