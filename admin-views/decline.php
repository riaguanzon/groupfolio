<?php
session_start();

require_once '../classes/user.class.php';
require_once '../classes/infos.class.php';

$editObj = new Edit;

$edit_profile = $editObj->fetch_tao($_GET['user_id']);

$_SESSION['user_request'] = $_GET['user_id'];
?>

<div class="modal fade" id="decline" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Decline Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form-decline-user">
                <div class="modal-body">
                    Do you want to Decline <?= $edit_profile['firstname'] . ' ' . $edit_profile['lastname'] ?> as a member for your team?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary brand-bg-color">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>