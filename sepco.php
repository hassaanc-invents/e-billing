<?php
include "./connection/connection.php";
include "./get-page-data/get-page-data.php";
include "./web-crawler/web-crawler.php";
$pageId = "007";
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
    <!-- Local Links -->
    <link rel="stylesheet" href="./style/navigation.css">
</head>
<body>
    <!-- Navigation -->
    <?php
    include "./components/navigation/navigation.php";
    ?>
    <!-- UnChnaged Frontend -->
    <div class="container">
        <div class="w-100">
            <center>
                <img src="./images/wapda/sepco-logo.png" class="my-5" style="width: 150px; height: 145px; border-radius: 50%" alt="<?php echo $totalPageData[4]; ?>">
            </center>
            <h1 class="text-center">SUKKUR ELECTRIC POWER COMPANY</h1>
            <div class="row">
                <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                    <form method="post" action="./pages/sepco/sepco-backend.php">
                        <div class="card p-4 mb-4 mainform">
                            <div class="card-body">
                                <div class="input-group input-group-lg">
                                    <input type="text" name="reference" id="reference" class="form-control" placeholder="Reference" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <div class="col-sm-4 offset-sm-8">
                                    <button type="submit" value="submit" name="submit" class="btn btn-success btn-block mt-4 px-2" id="checkBill">Check
                                        Bill</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Mepco Frontend -->
    <div class="container py-3">
        <?php
        echo $totalPageData[5];
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