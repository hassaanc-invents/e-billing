<!DOCTYPE html>
<html lang="en">
<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <!-- Local Link -->
    <link rel="stylesheet" href="/style/navigation.css">
    <link rel="stylesheet" href="/style/whatsapp-button.css">
    <?php
    include "./components/bootstrap/bootstrap-head.php";
    include "./components/other-meta-links/meta-links.php";
    ?>
</head>

<body>
    
    <!-- Navigation -->

    <?php
    include "./components/navigation/navigation.php";
    ?>

    <div class="container">
        <div class="w-100 mt-5">
            <div class="row">
                <div class="col">

                    <div class="card mb-4 mainform">
                        <div class="card-header">
                            <h4>Your Bill is Ready for Reference Number: 123</h4>
                        </div>
                        <div class="card-body">
                            <table class="table my-5">
                                <tbody>
                                    <tr>
                                        <td>Name &amp; Address</td>
                                        <td>

                                            MUHAMMAD IJAZ

                                            S/O M SHAREEF

                                            BASTI RIZWI ABAD

                                            K.PACCA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bill Amount</td>
                                        <td style="color:#0A0;"><strong>Rs.
                                                1222
                                            </strong></td>
                                    </tr>
                                    <tr>
                                        <td>Due Date</td>
                                        <td style="color:red;">24 JAN 23</td>
                                    </tr>
                                    <tr>
                                        <td>Late Payment Surcharge</td>
                                        <td>Rs. 95</td>
                                    </tr>
                                    <tr>
                                        <td>Amount After Due Date</td>
                                        <td style="color:orange;">Rs.
                                            1317
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

    <!--- Whatsapp Button -->

    <?php
    include "./components/whatsapp-button/whatsapp-button.php";
    ?>

    <!-- Bootstrap JavaScript Link -->

    <?php
    include "./components/bootstrap/bootstrap-javascript-foot.php";
    ?>

</body>

</html>