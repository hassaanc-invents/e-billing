
<?php
if (isset($_POST['addupdatemarkup'])) {
    include "../../connection/connection.php";
    $updatedPageId = $_GET['pageId'];
    $pageMarkupData = array();
    $pageBasicStructure = $_POST['markup_data'];
    $pageTotalData = array();
    $getMarkupDataQuery = "SELECT * FROM sub_pages_frontend WHERE sub_page_id='{$updatedPageId}'";
    $runGetMarkupDataQuery = mysqli_query($conn, $getMarkupDataQuery) or die("Cant Extract Data");
    if (mysqli_num_rows($runGetMarkupDataQuery) > 0) {
        while ($singlePageMarkupData = mysqli_fetch_assoc($runGetMarkupDataQuery)) {
            array_push($pageMarkupData,$singlePageMarkupData['page_name'], $singlePageMarkupData['file_path_to_edit'], $singlePageMarkupData['sub_page_markup']);
        }
    }
    $updatePageQuery = "UPDATE sub_pages_frontend SET sub_page_markup = '{$pageBasicStructure}' WHERE sub_page_id = '$updatedPageId'";
    $runUpdateQuery = mysqli_query($conn, $updatePageQuery);
   include "../../file-create-update/file-create-update.php";
    if ($pageBasicStructure != "") {
        CreateUpdateFile($pageBasicStructure,  $pageMarkupData[0], $pageMarkupData[1]);
    }
    header("Location: $baseURL/dashboard");
}
