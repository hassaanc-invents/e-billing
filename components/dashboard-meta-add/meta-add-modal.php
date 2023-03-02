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
                            <option value="1">MEPCO</option>
                            <option value="" disabled>LESCO</option>
                            <option value="" disabled>TESCO</option>
                            <option value="" disabled>SEPCO</option>
                            <option value="" disabled>QESCO</option>
                            <option value="" disabled>HESCO</option>
                            <option value="" disabled>GEPCO</option>
                            <option value="" disabled>FESCO</option>
                            <option value="" disabled>IESCO</option>
                            <option value="" disabled>PESCO</option>
                            <option value="" disabled>LESCO</option>
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
                            <option value="1">Home</option>
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