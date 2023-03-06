    <?php
    include "./components/dashboard-meta-add/meta-add-modal.php";
    $getUsersData = "SELECT * FROM our_visitors";
    $userDetailQueryRun = mysqli_query($conn, $getUsersData) or die("Rows Cant Count");
    ?>
    <section class="container" style="height: calc(100vh - 250px); overflow-x:auto">
        <div class="row">
            <div class="col-sm-3">
                <button type="button" class="btn btn-dark btn-block btn-outline-dark" data-toggle="modal" data-target="#selectUpdateCompanies">
                    Update Companies
                </button>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-dark btn-block btn-outline-dark" data-toggle="modal" data-target="#updateMetaData">
                    Update Meta Data
                </button>
            </div>
        </div>
        <div class="row px-2 mt-3 custom-scroll-bar" style="max-height: 480px; overflow-x:auto">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>User IP</th>
                        <th>Current Page</th>
                        <th>Referrer</th>
                        <th>IMP Time</th>
                        <th>Agent Details</th>
                        <th>Visits</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($userDetailQueryRun) > 0) {
                        while ($singleVisits = mysqli_fetch_assoc($userDetailQueryRun)) {
                    ?>
                            <tr>
                                <td>
                                    <?php
                                    echo $singleVisits['ip'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $singleVisits['current_page'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $singleVisits['referrer'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $singleVisits['imp_time'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $singleVisits['user_agent'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $singleVisits['total_visits'];
                                    ?>
                                </td>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>