<?php
session_start();
require_once '../classes/delete.class.php';

$objDelete = new Delete;

$delete_modal = $objDelete->delete_modal($_GET['project_id']);

$_SESSION['project_id'] = $_GET['project_id'];

?>  
<div class="modal fade" id="deleteProject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form-delete-project">
                <div class="modal-body">
                    <div class="mx-2">
                        Are you sure you want to delete <?= $delete_modal['title'] ?>?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger brand-bg-color">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>