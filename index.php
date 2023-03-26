<?php
include "./connection/connection.php";
include "./get-page-data/get-page-data.php";
include "./web-crawler/web-crawler.php";
$pageId = "001";
$totalPageData =  GetPageData($conn, $pageId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "./components/other-meta-links/meta-links.php";
    ?>
    <meta name="description" content="<?php echo $totalPageData[1]; ?>">
    <meta name="keywords" content="<?php echo $totalPageData[2]; ?>">
    <meta name="author" content="<?php echo $totalPageData[3]; ?>">
    <title><?php echo $totalPageData[0]; ?></title>
    <link rel="shortcut icon" href="./images/wapda/ebillpk-logo.png" type="image/x-icon">
    <?php
    include "./components/bootstrap/bootstrap-head.php";
    ?>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
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
    include "./components/main-home-section/home-page-cards.html";
    ?>
    <!-- Home Page Blog -->
    <div class="container py-3">
        <?php
        echo $totalPageData[5];
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