<?php
// Connection to DataBase
include "../../connection/connection.php";
// Insertion Started
if (isset($_POST['submit'])) {
    $contact_detail = array($_POST['full_name'], $_POST['email_cont'], $_POST['message']);
    $query = "INSERT INTO contact_us(full_name, email, message)
                VALUES('{$contact_detail[0]}','{$contact_detail[1]}','{$contact_detail[2]}')";
    $result = mysqli_query($conn, $query) or die("INSERTION FAILD");
    $finalMessage = wordwrap($contact_detail[2], 70);
    mail("hassaanmalick2001@gmail.com", "Via EbillPk Contact Us:", $finalMessage);
    header("Location: $baseURL/contactus");
}
