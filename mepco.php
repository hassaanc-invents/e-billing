<!DOCTYPE html>
<html lang="en">
<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
    <link rel="stylesheet" href="./style/whatsapp-button.css">
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
        <?php
    include "./pages/mepco/mepco-frontend-uneditable.php";
    ?>
    <!-- Mepco Frontend -->
    <div class="container">
    <?php
    include "./pages/mepco/mepco-frontend.php";
    ?>
    </div>
    <!--- Whatsapp Button -->
    <?php
    include "./components/whatsapp-button/whatsapp-button.php";
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