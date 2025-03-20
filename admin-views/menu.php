<?php
session_start();

require_once '../classes/user.class.php';
require_once '../classes/infos.class.php';

$editObj = new Edit;

$edit_profile = $editObj->fetch_user($_GET['user_id']);
?>
<div class="modal fade" id="accept" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Accept Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form-edit-profile">
                <div class="modal-body">
                    Do you want to accept as a member for your team?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary brand-bg-color">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>