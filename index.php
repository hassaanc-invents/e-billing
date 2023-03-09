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
    <section class="container">
        <h2 class="text-center my-4">All Listed Companies</h2>
        <div class="row match-height mt-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <center>
                            <img class="mt-2" src="./images/wapda/mepco-logo.png" style="width: 150px; height: 140px" alt="mepco">
                        </center>
                        <div class="card-body">
                            <h5>Mepco</h5>
                            <p class="card-text  mb-0">Multan Electric Power Company</p>
                            <span class="card-text">Punjab, Pakistan</span>
                            <div class="card-btns d-flex justify-content-end mt-2">
                                <a href="mepco" class="btn btn-dark waves-effect waves-light px-5">Check Bill</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fesco Card -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <center>
                            <img class="mt-2" src="./images/wapda/fesco-logo.jpg" style="width: 150px; height: 140px" alt="fesco">
                        </center>
                        <div class="card-body">
                            <h5>FESCO</h5>
                            <p class="card-text  mb-0">Faisalabad Electric Supply Company</p>
                            <div class="card-btns d-flex justify-content-end mt-2">
                                <a href="fesco" class="btn btn-dark waves-effect waves-light px-5">Check Bill</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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