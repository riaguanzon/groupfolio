<?php
session_start();
require_once '../classes/user.class.php';

var_dump($_GET['user_id']);

$_SESSION['user_id_deact'] = $_GET['user_id']; 

?>

<div class="modal fade" id="deactivateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deactivation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form-deactivate-user">
                <div class="modal-body">
                    Are you sure you want to deactivate this user? This action cannot be undone
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger brand-bg-color">Deactivate</button>
                </div>
            </form>
        </div>
    </div>
</div>