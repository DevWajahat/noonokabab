<?php
include "ticket-sidebar.php";
?>
<div class="content-area">
    <table class="datatables-ajax table-responsive table-stripe table" id="orders-table">
        <thead>
            <tr>
                <th>Reference No</th>
                <th>Department</th>
                <th>Subject</th>
                <th>Status</th>
                <th>Last Update</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#9733589</td>
                <td>Technical Support</td>
                <td><a href="ticketinfo.php">#324815</a></td>
                <td><button type="button" class="open-btn">Open</button> <button type="button" class="closed-btn">Closed</button></td>
                <td><span class="w-hidden">2024-03-16 00:16:11</span> Saturday, March 16th, 2024 (00:16)</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include "ticket-footer.php";
?>