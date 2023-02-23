<?php
include "./connection/connection.php";
if (isset($_GET['referenceNumber'])) {
    session_start();
?>
    <div class="container">
        <div class="w-100 mt-5">
            <div class="row">
                <div class="col">

                    <div class="card mb-4 mainform">
                        <div class="card-header">
                            <h4>Your Bill is Ready for Reference Number: <?php echo $_SESSION['refNumber'] ?></h4>
                        </div>
                        <div class="card-body">
                            <table class="table my-5">
                                <tbody class="text-left">
                                    <tr>
                                        <td>Name &amp; Address</td>
                                        <td>
                                            <?php
                                            echo $_SESSION['meterOwnerDetail'];
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bill Amount</td>

                                        <td>
                                            <?php
                                            echo $_SESSION['payableInDate'];
                                            ?>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Due Date</td>

                                        <td>
                                            <?php
                                            echo $_SESSION['dueDate'];
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Late Payment Surcharge</td>
                                        <td><?php
                                            echo  $_SESSION['latePayment'];
                                            ?></td>
                                    </tr>
                                    <tr>
                                        <td>Amount After Due Date</td>
                                        <td style="color:orange;">Rs.
                                            <?php
                                            echo $_SESSION['payableAfterDate'];
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="col-sm-4 offset-sm-8">
                                <button type="submit" class="btn btn-success btn-block mt-4" id="checkBill">Genrate PDF</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
} else {
    header("Location: $baseURL/index");
}
?>


<!--- Whatsapp Button -->

<?php
include "./components/whatsapp-button/whatsapp-button.php";
?>