<?php
include "../../connection/connection.php";
check_login($conn);
$updateAdminId = $_GET['adminId'];
$getAdminInformationQuery = "SELECT * FROM admin_information WHERE admin_id = '$updateAdminId'";
$runAdminInformationQuery = mysqli_query($conn, $getAdminInformationQuery) or die("Information Gathering Failed");
if (mysqli_num_rows($runAdminInformationQuery) > 0) {
    while ($getSingleAdmin = mysqli_fetch_assoc($runAdminInformationQuery)) {
        $getSingleAdminId = $getSingleAdmin['admin_id'];
        if ($getSingleAdmin['isActive'] == 1) {
            $adminApproveQuery =  "UPDATE admin_information
            SET  isActive = '0'
            WHERE admin_id = '$getSingleAdminId'";
            $updateStatus = mysqli_query($conn, $adminApproveQuery) or die("Admin Approve Error");
        } else {
            if ($getSingleAdmin['isActive'] == 0) {
                $adminApproveQuery =  "UPDATE admin_information
            SET  isActive = '1'
            WHERE admin_id = '$getSingleAdminId'";
                $updateStatus = mysqli_query($conn, $adminApproveQuery) or die("Admin Approve Error");
            }
        }
    }
}
header("Location: $baseURL/dashboard");
?>