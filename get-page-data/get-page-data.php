<?php
function GetPageData($conn, $pageId){
$totalPageData = array();
$getPageDataQuery = "SELECT * FROM all_pages_markup_data WHERE page_id = '$pageId'";
$runPageDataQuery = mysqli_query($conn, $getPageDataQuery) or die("Cant Extract Data");
if (mysqli_num_rows($runPageDataQuery) > 0) {
    while ($singlePageData = mysqli_fetch_assoc($runPageDataQuery)) {
        array_push($totalPageData, $singlePageData['page_title_data'], $singlePageData['page_description'], $singlePageData['page_keywords'], $singlePageData['page_author'], $singlePageData['image_alt_tag'], $singlePageData['page_markup']);
    }
}
return $totalPageData;
}
?>