<!DOCTYPE html>
<html lang="en">

<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <?php
    include "./components/bootstrap/bootstrap-head.php";
    include "./components/other-meta-links/meta-links.php";
    ?>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
    <link rel="stylesheet" href="./style/main-section.css">
    <link rel="stylesheet" href="./style/whatsapp-button.css">
    <link rel="stylesheet" href="./style/main-page-cards.css">

</head>

<body>
    <!-- Navigation -->
    <?php
    include "./components/navigation/navigation.php";
    ?>
    <!-- Main Section -->
    <?php
    include "./components/main-home-section/main-home-section.php";
    ?>
    <!--- Whatsapp Button -->
    <?php
    include "./components/whatsapp-button/whatsapp-button.php";
    ?>
    <!-- Website About -->
    <div class="bg-dark-full">
        <div class="container pt-3">
            <div class="row ">
                <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                    <form method="post" action="result">
                        <div class="card mainform">
                            <div class="card-body">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Reference #</span>
                                    <input type="text" name="reference" id="reference" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <div class="input-group input-group-lg mt-4">
                                    <select name="" id="" cl class="form-control">
                                        <option value="">Select Company</option>
                                        <option value="">Mepco</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 offset-sm-8">
                                    <button type="submit" class="btn btn-success btn-block mt-4" id="checkBill">Check
                                        Bill</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards Section -->
    <?php
    include "./components/main-page-cards/main-page-cards.php";
    ?>
    <!-- Home Page Blog -->
    <?php
    include "./pages/home/home-page-frontend.php";
    ?>
    <!-- Footer Include -->
    <?php
    include "./components/footer/footer.php";
    ?>
    <!-- Bootstrap JavaScript Link -->
    <?php
    include "./components/bootstrap/bootstrap-javascript-foot.php";
    ?>
</body>

</html>