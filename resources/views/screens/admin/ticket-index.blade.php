<?php
include "ticket-sidebar.php";
?>
<div class="content-area">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between">
            <h2 class="ticket-hd">Create new Support Request</h2>
            <button class="submit-btn">Submit Ticket</button>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-fields">
                        <label for="">Name</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-fields">
                        <label for="">Email Address</label>
                        <input type="email" placeholder="">
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="form-fields">
                        <label for="">Subject</label>
                        <input type="email" placeholder="">
                    </div>
                </div>

                <div class="col-6 mt-4">
                    <div class="form-fields">
                        <label for="">Department</label>
                        <select name="Technical" id="Technical">
                            <option value="volvo">Technical Support</option>
                            <option value="saab">Billing</option>
                            <option value="mercedes">Domain Department</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="form-fields">
                        <label for="">Priority</label>
                        <select name="Technical" id="Technical">
                            <option value="volvo">High</option>
                            <option value="saab">Medium</option>
                            <option value="mercedes">Low</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="form-fields">
                        <label for="">Priority</label>
                        <div id="summernote"></div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="form-fields">
                        <label for="">Attachments</label>
                        <div class="input-files position-relative">
                            <div class="d-flex align-items-center w-90 clone-area" clone-data="data-group=0">
                                <input type="file" class="file-input" class="fileinput" id="index1" accept="image/gif, image/jpeg, image/png">
                                <div class="browse-btn">
                                    <button class="browse-greybtn" type="button">Browse</button>
                                </div>
                            </div>
                            <button class="addmore-btn"><i class="fas fa-plus"></i>Add More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "ticket-footer.php";
?>
