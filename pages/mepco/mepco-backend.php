<?php
include "../../connection/connection.php";
if (isset($_POST['submit'])) {
    $referenceNumber = $_POST['reference'];
    $content = "https://bill.pitc.com.pk/mepcobill/general?refno=" . $referenceNumber;
    $mepcoWebHtml = file_get_contents($content);
    $getBillDetailRegex = '/<td colspan="3" class="border-b  nestedtd2width content">(.*?)<\/td>/s';
    $referenceNumberRegex = '/<td class="font-size border-rb content" style="width: 25%; text-align: Center;">(.*?)<\/td>/s';
    $dueDateRegex = '/<td class="border-b" style="text-align: center;">(.*?)<\/td>/s';
    $meterOwnerRegex = "!<span>(.*?)</span>!is";
    preg_match_all($meterOwnerRegex, $mepcoWebHtml, $meterOwnerDetail);;
    preg_match_all($getBillDetailRegex, $mepcoWebHtml, $billDetail);
    preg_match_all($referenceNumberRegex, $mepcoWebHtml, $completeRefNumber);
    preg_match_all($dueDateRegex, $mepcoWebHtml, $dueDate);
    session_start();
    $_SESSION['meterOwnerDetail'] = $meterOwnerDetail[0][1] .  $meterOwnerDetail[0][2] .  $meterOwnerDetail[0][3] .  $meterOwnerDetail[0][4];
    $_SESSION['payableInDate'] = strip_tags($billDetail[0][1]);
    $_SESSION['payableAfterDate'] = strip_tags($billDetail[0][6]);
    $_SESSION['dueDate'] = strip_tags($dueDate[0][0]);
    $_SESSION['refNumber'] = strip_tags($completeRefNumber[0][0]);
    $_SESSION['latePayment'] = $_SESSION['payableAfterDate'] - $_SESSION['payableInDate'];
    header("Location: $baseURL/result?referenceNumber=$referenceNumber&company=mepco");
} else {
    header("Location: $baseURL/result");
}
