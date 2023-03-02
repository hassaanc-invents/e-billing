<?php
include "../../connection/connection.php";
if (isset($_POST['add-meta'])) {
    session_start();
    $pageCompleteData = array();
    $getDataFromPageId = $_POST['main_page_id'];
    $getPageDataBackendQuery = "SELECT * FROM main_pages_meta_data WHERE page_id='{$getDataFromPageId}'";
    $runPageDataBackendQuery = mysqli_query($conn, $getPageDataBackendQuery) or die("Cant Extract Data");
    if (mysqli_num_rows($runPageDataBackendQuery) > 0) {
        while ($singlePageData = mysqli_fetch_assoc($runPageDataBackendQuery)) {
            array_push($pageCompleteData, $singlePageData['page_title_data'], $singlePageData['page_description'], $singlePageData['page_keywords'], $singlePageData['page_author'], $singlePageData['page_name']);
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>E Billing | Check Your Bills of All Pakistani Services</title>
        <?php
        include "../../components/bootstrap/bootstrap-head.php";
        include "../../components/other-meta-links/meta-links.php";
        ?>
        <!-- Local Link -->
        <link rel="stylesheet" href="../../style/navigation.css">
        <link rel="stylesheet" href="../../style/add-meta-section.css">
    </head>

    <body>
        <!-- Navigation -->
        <?php
        include "../../components/navigation/navigation.php";
        ?>
        <!-- Dashboad Header -->
        <?php
        include "../../components/dashboard-header/dashboard-header.php"
        ?>
        <div class="container content-holder">
            <form action="add-meta-data-backend?pageId=<?php echo$getDataFromPageId?>" method="post">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="site-title">Title Text / Head Text</label>
                        <input type="text" name="page_title_data" id="site-title" class="form-control" value="<?php echo $pageCompleteData[0] ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="site-meta-desc">Description</label>
                        <input type="text" name="page_discription" id="site-meta-desc" class="form-control" value="<?php echo $pageCompleteData[1] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="site-keywords">Keywords</label>
                        <input type="text" name="page_keywords" id="site-keywords" class="form-control" value="<?php echo $pageCompleteData[2] ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="site-author">Author</label>
                        <input type="text" name="page_author" id="site-author" class="form-control" value="<?php echo $pageCompleteData[3] ?>">
                    </div>
                    <input hidden type="text" name="page_name" id="site-name" class="form-control" value="<?php echo $pageCompleteData[4] ?>">
                </div>
                <!-- Submit Button -->
                <div class="row">
                    <div class="form-group col-sm-3 offset-sm-9">
                        <button type="submit" value="submit" name="addupdatemarkup" class="btn btn-block btn-outline-dark">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Footer Include -->
        <?php
        include "../../components/footer/footer.php";
        ?>
        <!-- Bootstrap JavaScript Link -->
        <?php
        include "../../components/bootstrap/bootstrap-javascript-foot.php";
        ?>
    </body>

    </html>
<?php
} else {
    header("Location: $baseURL/dashboard");
}
?>