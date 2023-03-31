<?php
include "../../connection/connection.php";
if (isset($_POST['submit'])) {
    $referenceNumber = $_POST['reference'];
    $content = "https://bill.pitc.com.pk/qescobill/general?refno=" . $referenceNumber;
    $qescoWebHtml = file_get_contents($content);
    $getTotalBill = '/<td class="border-b border-t border-r content" style="width: 20%;">(.*?)<\/td>/s';
    $getBillAfterDate = '/<td class="font-size border-rb border-r content" style="width: 15%;">(.*?)<\/td>/s';
    $referenceNumberRegex = '/<td class="font-size border-rb content" style="width: 25%; text-align: Center;">(.*?)<\/td>/s';
    $dueDateRegex = '/<td class="border-b" style="text-align: center;">(.*?)<\/td>/s';
    $meterOwnerRegex = "!<span>(.*?)</span>!is";
    preg_match_all($meterOwnerRegex, $qescoWebHtml, $meterOwnerDetail);;
    preg_match_all($getTotalBill, $qescoWebHtml, $totalBill);
    preg_match_all($getBillAfterDate, $qescoWebHtml, $billAfterDate);
    preg_match_all($referenceNumberRegex, $qescoWebHtml, $completeRefNumber);
    preg_match_all($dueDateRegex, $qescoWebHtml, $dueDate);
    session_start();
    $_SESSION['meterOwnerDetail'] = $meterOwnerDetail[0][1] .  $meterOwnerDetail[0][2] .  $meterOwnerDetail[0][3] .  $meterOwnerDetail[0][4];
    $_SESSION['payableInDate'] = strip_tags($totalBill[0][0]);
    $_SESSION['payableAfterDate'] = strip_tags($billAfterDate[0][0]);
    $_SESSION['dueDate'] = strip_tags($dueDate[0][0]);
    $_SESSION['refNumber'] = strip_tags($completeRefNumber[0][0]);
    $_SESSION['latePayment'] = $_SESSION['payableAfterDate'] - $_SESSION['payableInDate'];
    header("Location: $baseURL/result?referenceNumber=$referenceNumber&company=qesco");
} else {
    header("Location: $baseURL/result");
}