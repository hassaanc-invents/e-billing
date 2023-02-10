<!DOCTYPE html>
<html lang="en">

<head>
    <title>E Billing | Check Your Bills of All Pakistani Services</title>
    <!-- Local Link -->
    <link rel="stylesheet" href="./style/navigation.css">
    <link rel="stylesheet" href="./style/main-slider.css">
    <link rel="stylesheet" href="./style/whatsapp-button.css">
    <link rel="stylesheet" href="./style/main-page-cards.css">
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

    <!-- carousel -->

    <?php
    include "./components/carousel/carousel.php";
    ?>

    <!--- Whatsapp Button -->

    <?php
    include "./components/whatsapp-button/whatsapp-button.php";
    ?>

    <!-- Website About -->

    <div class="container pt-3">
        <h2 class="text-dark">Welcome to Ebilling</h2>
        <div class="row">
            <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <form method="post" action="/pages/result/result.html">
                    <div class="card p-4 mb-4 mainform">
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
        <p class="text-dark">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis atque quasi cumque, unde assumenda dolorum
            tempora iusto est esse saepe voluptatem soluta modi laboriosam, totam perspiciatis ad architecto pariatur
            accusamus expedita quae tempore! Alias deleniti beatae corrupti recusandae quae impedit, deserunt in eum
            voluptatibus vel harum eligendi expedita, ipsam magnam sed esse doloribus magni delectus, eos nihil debitis iure
            aperiam illo. Voluptatum blanditiis dolorem recusandae nesciunt et soluta ipsa architecto molestias voluptatibus
            possimus? Cumque repudiandae molestiae provident voluptatem nulla animi corporis unde eos. Numquam ad soluta atque
            harum quidem adipisci rem nostrum facilis recusandae qui mollitia sunt, perferendis architecto dolores.
        </p>
        <p class="text-dark">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae enim iure tempora quod nemo, asperiores
            voluptas. Iusto facere, dicta est mollitia quos neque, dignissimos cumque, soluta perspiciatis doloribus sequi?
            Distinctio repudiandae debitis aut, facere molestias officiis magni sit reprehenderit quasi nostrum, repellendus,
            nobis explicabo? Veniam magni non cumque consectetur ipsa. Et iste amet aliquam veniam quisquam? At nesciunt quasi
            esse. Aperiam esse enim modi eos explicabo quo animi, repudiandae quia. Aspernatur, earum enim id suscipit nostrum
            dignissimos officiis neque repellat sint non recusandae quam nemo laudantium ipsam, ducimus voluptatum laboriosam
            obcaecati consequuntur eveniet aut, adipisci distinctio voluptates magnam! Dolore repellendus quod neque veniam
            nam iste ipsam, aut harum culpa facilis ea aspernatur quae numquam at fugiat enim quis laboriosam rerum quasi.
            Quam, laboriosam omnis in, repellat error eveniet, natus earum suscipit consequatur nesciunt voluptates. Ea eaque
            recusandae eius facilis magnam dignissimos reprehenderit debitis, unde atque obcaecati perspiciatis numquam
            temporibus odio?
        </p>
        <p class="text-dark">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere deserunt exercitationem ipsam, voluptate at
            inventore ratione! Obcaecati, molestias consequatur nobis quasi distinctio minus esse fuga quam eveniet, nostrum
            iusto enim illo officiis fugiat magni consectetur ex, maxime accusantium quibusdam mollitia quo placeat? In rerum
            corporis, nisi officia cupiditate inventore repellendus.
        </p>
    </div>

    <!-- Cards Section -->

    <?php
    include "./components/main-page-cards/main-page-cards.php";
    ?>

    <!-- Bootstrap JavaScript Link -->

    <?php
    include "./components/bootstrap/bootstrap-javascript-foot.php";
    ?>

</body>

</html>