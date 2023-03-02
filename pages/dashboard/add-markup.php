<?php
include "../../connection/connection.php";
if (isset($_POST['add-markup'])) {
    session_start();
    $pageCompleteData = array();
    $getDataFromPageId = $_POST['page_id'];
    $getPageDataBackendQuery = "SELECT * FROM sub_pages_frontend WHERE sub_page_id='{$getDataFromPageId}'";
    $runPageDataBackendQuery = mysqli_query($conn, $getPageDataBackendQuery) or die("Cant Extract Data");
    if (mysqli_num_rows($runPageDataBackendQuery) > 0) {
        while ($singlePageData = mysqli_fetch_assoc($runPageDataBackendQuery)) {
            array_push($pageCompleteData, $singlePageData['file_path_to_edit'], $singlePageData['sub_page_markup']);
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
        <!-- <link rel="stylesheet" href="../../style/add-meta-section.css"> -->
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
            <form action="add-markup-backend?pageId=<?php echo$getDataFromPageId?>" method="post">

                <div class="form-group">
                    <label for="markup_data">Add Markup Data</label>
                    <textarea name="markup_data" id="markup_data" class="form-control" rows="25"><?php echo $pageCompleteData[1]?></textarea>
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