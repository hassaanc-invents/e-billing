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
    <link rel="stylesheet" href="./style/main-section.css">
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
    <div class="container">
    <?php
    include "./pages/home/home-page-frontend.php";
    ?>
    </div>
    <!-- Footer Include -->
    <?php
    include "./components/footer/footer.php";
    ?>
    <!-- JavaScript -->
    <script>
        document.getElementById('global-search-form').globalCompanySelect.onchange = function() {
            var newaction = this.value;
            document.getElementById('global-search-form').action = newaction;
        };
    </script>
    <!-- Bootstrap JavaScript Link -->
    <?php
    include "./components/bootstrap/bootstrap-javascript-foot.php";
    ?>
</body>

</html>