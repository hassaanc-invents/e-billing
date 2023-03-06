
<?php
if (isset($_POST['addupdatemarkup'])) {
    include "../../connection/connection.php";
    $updatedPageId = $_GET['pageId'];
    $pageBasicStructure = mysqli_real_escape_string($conn, $_POST['markup_data']);
    $updatePageQuery = "UPDATE all_pages_markup_data SET page_markup = '{$pageBasicStructure}' WHERE page_id = '$updatedPageId'";
    $runUpdateQuery = mysqli_query($conn, $updatePageQuery);
    header("Location: $baseURL/dashboard");
}
?>