<?php
$getAdminsDetails = "SELECT * FROM admin_information";
$runAdminDetailsQuery = mysqli_query($conn, $getAdminsDetails) or die("Information Gathering Failed");
?>
<section class="container">
    <div class="row px-2 my-3 custom-scroll-bar" style="height: calc(100vh - 250px); overflow-x:auto">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Is Active</th>
                    <th>Change Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($runAdminDetailsQuery) > 0) {
                    while ($singleAdmin = mysqli_fetch_assoc($runAdminDetailsQuery)) {
                ?>
                        <tr>
                            <td>
                                <?php echo  $singleAdmin['admin_name']; ?>
                            </td>
                            <td>
                                <?php echo  $singleAdmin['phone_number']; ?>
                            </td>
                            <td>
                                <?php echo  $singleAdmin['admin_email']; ?>
                            </td>
                            <td>
                                <button class="btn btn-block btn-success text-light">
                                    <?php
                                    if ($singleAdmin['isActive'] == 1)
                                        echo "Approved";
                                    elseif ($singleAdmin['isActive'] == 0)
                                        echo "Pending";
                                    else
                                        echo "Super Admin"
                                    ?>
                                </button>
                            </td>
                            <td>
                                <a type="button" class="btn btn-block btn-danger text-light" href="./pages/super-admin/super-admin-backend?adminId=<?php echo $singleAdmin['admin_id'] ?>">
                                    Change
                                </a>
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