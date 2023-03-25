<?php
include "./connection/connection.php";
include "./get-page-data/get-page-data.php";
include "./web-crawler/web-crawler.php";
$pageId = "005";
$totalPageData =  GetPageData($conn, $pageId);
?>
<!doctype html>
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
    <link rel="stylesheet" href="./style/contact-us.css">
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
    <div class="wrapper d-flex align-items-stretch">
    <!-- Page Content  -->
      <div class="main-conatiner">
        <h2>
        <?php
        echo $totalPageData[5];
        ?>
        </h2>
      </div>
    </div>
    <!-- Frontend -->
    <?php
    include "./pages/contact-us/contact-us-frontend.html";
    ?>
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