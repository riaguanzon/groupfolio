<?php
session_start();


require_once '../classes/user.class.php';

$editObj = new Edit;

$edit_profile = $editObj->fetch_user($_GET['user_id']);
?>

<div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="form-edit-profile">
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="code" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $edit_profile['birthday'] ?>">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-2">
                        <label for="code" class="form-label">Section</label>
                        <input type="text" class="form-control" id="section" name="section" value="<?= $edit_profile['section'] ?>">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-2">
                        <label for="code" class="form-label">Bio</label>
                        <textarea type="text" class="form-control" id="bio" name="bio">
                       <?= $edit_profile['bio'] ?>
                        </textarea>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-2">
                        <label for="code" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" value="<?= $edit_profile['contact'] ?>">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-2">
                        <label for="code" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $edit_profile['address'] ?>">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-2">
                        <label for="code" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $edit_profile['email'] ?>">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary brand-bg-color">Update Information</button>
                </div>
            </form>
        </div>
    </div>
</div>