<?php
include "./connection/connection.php";
include "./get-page-data/get-page-data.php";
include "./web-crawler/web-crawler.php";
$pageId = "002";
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
    <!-- Main Container -->
    <div>
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-muted">About Ebillpk</h1>
                    <p class="lead text-muted mb-0">We will help you to get copy of Electric Bill.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img src="./images/ebillpk/ebillpk-logo.webp" alt="<?php echo $totalPageData[4]; ?>" class="img-fluid"></div>
            </div>
        </div>
        <!-- Home Page Blog -->
        <div class="bg-white">
            <div class="container py-5">
                <div class="row align-items-center mb-5">
                    <div class="col order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-warning"></i>
                        <div>
                            <?php
                            echo $totalPageData[5];
                            ?></div>
                        <a href="#" class="btn btn-light px-5 rounded-pill shadow-sm bg-warning py-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section -->
        <?php
        include "./pages/about-us/teams-section.html";
        ?>
    </div>
    <!-- Footer Include -->
    <?php
    include "./components/footer/footer.php";
    ?>
    <!-- Bootstrap JavaScript Link -->
    <?php
    include "./components/bootstrap/bootstrap-javascript-foot.php";
    ?>
</body>

</html>