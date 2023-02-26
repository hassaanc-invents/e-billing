
<?php
if (isset($_POST['addupdatemarkup'])) {
    include "../../connection/connection.php";
    $updatedPageId = $_GET['pageId'];
    $pageMarkupData = array();
    $pageBasicStructure = array();
    $pageTotalData = array();
    $getMarkupDataQuery = "SELECT * FROM main_pages_markup_data WHERE page_id='{$updatedPageId}'";
    $getBasicPageStructure = "SELECT * FROM basic_pages_markup_structure";
    $runGetMarkupDataQuery = mysqli_query($conn, $getMarkupDataQuery) or die("Cant Extract Data");
    $runGetBasicPageMarkupStruct = mysqli_query($conn, $getBasicPageStructure) or die("Cant Extract Data");
    if (mysqli_num_rows($runGetMarkupDataQuery) > 0) {
        while ($singlePageMarkupData = mysqli_fetch_assoc($runGetMarkupDataQuery)) {
            array_push($pageMarkupData, $singlePageMarkupData['page_name'], $singlePageMarkupData['import_pages_main_button'], $singlePageMarkupData['page_main_markup'], $singlePageMarkupData['import_pages_local_links']);
        }
    }
    if (mysqli_num_rows($runGetBasicPageMarkupStruct) > 0) {
        while ($singleBasicStructure = mysqli_fetch_assoc($runGetBasicPageMarkupStruct)) {
            array_push($pageBasicStructure, $singleBasicStructure['meta_data_before_head_tags'], $singleBasicStructure['meta_data_after_head_tags'], $singleBasicStructure['page_closure_data']);
        }
    }
    array_push($pageTotalData, $_POST['page_title_data'], $_POST['page_discription'], $_POST['page_keywords'], $_POST['page_author']);
    $updatePageQuery = "UPDATE main_pages_meta_data SET page_title_data = '{$pageTotalData[0]}', page_description = '{$pageTotalData[1]}',page_keywords = '{$pageTotalData[2]}',page_author = '{$pageTotalData[3]}' WHERE page_id = '$updatedPageId'";
    $runUpdateQuery = mysqli_query($conn, $updatePageQuery);
    $completeMarkupOfFile = $pageBasicStructure[0] . '<title>' . $pageTotalData[0] . '</title>
    <meta name="description" content="' . $pageTotalData[1] . '">
    <meta name="keywords" content="' . $pageTotalData[2] . '">
    <meta name="author" content="' . $pageTotalData[3] . '">' . $pageMarkupData[3] . $pageBasicStructure[1] . $pageMarkupData[1] . $pageMarkupData[2] . $pageBasicStructure[2];
    include "../../file-create-update/file-create-update.php";
    if ($pageMarkupData[0] != "") {
        CreateUpdateFile($completeMarkupOfFile,  $pageMarkupData[0], "../../");
    }
    header("Location: $baseURL/dashboard");
}
