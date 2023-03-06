
<?php
if (isset($_POST['addupdatemarkup'])) {
    include "../../connection/connection.php";
    $updatedPageId = $_GET['pageId'];
    $pageTotalData = array();
    array_push($pageTotalData,$_POST['image_alt_tag'], $_POST['page_title_data'], $_POST['page_discription'],$_POST['page_author'], $_POST['page_keywords']);
    $updatePageQuery = "UPDATE all_pages_markup_data SET image_alt_tag= '{$pageTotalData[0]}', page_title_data = '{$pageTotalData[1]}',	page_description = '{$pageTotalData[2]}',page_author = '{$pageTotalData[3]}' ,page_keywords = '{$pageTotalData[4]}' WHERE page_id = '$updatedPageId'";
    $runUpdateQuery = mysqli_query($conn, $updatePageQuery) or die("Meta Updation Failed");
    header("Location: $baseURL/dashboard");
}
?>
