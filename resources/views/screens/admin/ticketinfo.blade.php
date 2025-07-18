<?php
include "ticket-sidebar.php";
?>
<div class="content-area">
    <div class="row">
        <div class="col-12">
            <div class="view-ticket">
                <div class="d-flex justify-content-between">
                    <div class="ticket-view">
                        <h2>View Ticket #324798</h2>
                    </div>
                    <div class="button-rplaycolse">
                        <button class="replay-btn"><i class="fa-solid fa-pen"></i> Replay</button>
                        <button class="closed-btn"><i class="fa-solid fa-x"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h2 class="ticket-hd">Reply</h2>
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
                        <label for="">Message</label>
                        <textarea id="myTextarea"></textarea>
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
                <div class="col-12">
                    <div class="hr-lien"><hr class="pd-5"></div>
                </div>
                <div class="col-12">
                    <div class="messages-boxs ticket-view">
                         <p><span>Subject: </span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim nemo asperiores porro tempore fugit harum laborum dolore quis quasi expedita saepe, ad ipsa vel recusandae odit nisi, iste mollitia consequuntur.</p>
                    </div>
                    <div class="messages-boxs ticket-view">
                        <button class="owner-btn">Owner</button>
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, exercitationem eos. Officiis iste modi placeat fugit odio. Inventore, praesentium quae culpa, eius laboriosam debitis doloribus nisi error facere cumque ab.</p>
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="messages-boxs ticket-view">
                        <button class="operator-btn">Operator</button>
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, exercitationem eos. Officiis iste modi placeat fugit odio. Inventore, praesentium quae culpa, eius laboriosam debitis doloribus nisi error facere cumque ab.</p>
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "ticket-footer.php";
?>
