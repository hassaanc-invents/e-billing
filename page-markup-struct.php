
    <?php
    $metaTagBeforTitle = '<!DOCTYPE html>
<html lang="en">
<head>
<title>';
    $metaTagAfterTitle = '</title>
<?php
include "./components/bootstrap/bootstrap-head.php";
include "./components/other-meta-links/meta-links.php";
?>';
    $importLinksForIndexPage = ' <!-- Local Link -->
<link rel="stylesheet" href="./style/navigation.css">
<link rel="stylesheet" href="./style/main-section.css">
<link rel="stylesheet" href="./style/whatsapp-button.css">
<link rel="stylesheet" href="./style/main-page-cards.css">
';
    $headAndNavigation = '
</head>

<body>
    <!-- Navigation -->
    <?php
    include "./components/navigation/navigation.php";
    ?>
';
    $importWhatsAppButton = '

';

    $footerBootstrapBodyClose = '
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
';
    $homePageCardsAndForm = '

';

    $mainHomePage = '    ';
