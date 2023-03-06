<?php
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 $referrer = $_SERVER['HTTP_REFERER'];
 $datetime = date("F j, Y, g:i a");
 $useragent = $_SERVER['HTTP_USER_AGENT'];
 $updateGetStatusQuery = "SELECT * FROM our_visitors WHERE ip = '$ipaddress'";
 $runUpdateQueryStatus = mysqli_query($conn,  $updateGetStatusQuery) or die (mysqli_error($conn));
 if(mysqli_num_rows($runUpdateQueryStatus)>0){
    while ($getSingleUser = mysqli_fetch_assoc($runUpdateQueryStatus)) {
        $visitsNumber = $getSingleUser['total_visits']+1;
        $ipAddressData = $getSingleUser['ip'];
        $updateuserQuery = "UPDATE our_visitors SET total_visits = '{$visitsNumber}' WHERE ip = '$ipaddress'";
        $runwebcrawlerupdate = mysqli_query($conn,  $updateuserQuery) or die (mysqli_error($conn));
    }
} else {
    $updateUserDataStatus;
    $webcrawlquery = "INSERT INTO our_visitors(ip, current_page, referrer, imp_time, user_agent, total_visits) VALUES('$ipaddress','$page','$referrer','$datetime','$useragent', 1)";
    $runwebcrawler = mysqli_query($conn,  $webcrawlquery) or die (mysqli_error($conn));
}
?>