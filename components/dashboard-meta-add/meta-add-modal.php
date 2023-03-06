<?php
// Backend For Getting Modal Dropdown
$getPagesDataQuery = "SELECT * FROM all_pages_markup_data";
$runPagesDataQuery = mysqli_query($conn, $getPagesDataQuery) or die("Pages Fetch Error");
$pagesData = array();
if (mysqli_num_rows($runPagesDataQuery) > 0) {
    while ($singlePageData = mysqli_fetch_assoc($runPagesDataQuery)) {
        array_push($pagesData, [
            $singlePageData['page_id'],
            $singlePageData['page_name']
        ]);
    }
}
?>

<div class="modal fade" id="selectUpdateCompanies" tabindex="-1" role="dialog" aria-labelledby="selectUpdateCompaniesLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectUpdateCompaniesLabel">Select Company to Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="pages/dashboard/add-markup" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="page_id" id="" required>
                            <option value="">Select</option>
                            <?php
                            foreach ($pagesData as $singlePage) {
                            ?>
                                <option value="<?php echo $singlePage[0]; ?>"><?php echo $singlePage[1]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add-markup" value="meta-markup">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Second Modal -->
<div class="modal fade" id="updateMetaData" tabindex="-1" role="dialog" aria-labelledby="updateMetaDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateMetaDataLabel">Select Page to Add Meta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="pages/dashboard/add-meta-data" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="main_page_id" id="" required>
                            <option value="">Select Page</option>
                            <?php
                            foreach ($pagesData as $singlePage) {
                            ?>
                                <option value="<?php echo $singlePage[0]; ?>"><?php echo $singlePage[1]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add-meta" value="meta-allowed">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>