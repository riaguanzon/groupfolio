<?php
require_once '../classes/admin.class.php';
require_once '../classes/infos.class.php';


$objProfile = new User;

$profile = $objProfile->view($_GET['user_id']);
$objInfos = new Infos;
$fetchinfo = $objInfos->fetchinfos($_GET['user_id']);
?>
<style>
    /* General modal styling */
    .modal-body {
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Image styling */
    .modal-body img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /* Name styling */
    .modal-body span {
        font-weight: bold;
        color: #333;
        display: block;
        margin-top: 10px;
    }

    .modal-body .card-text {
        margin-bottom: 15px;
        color: #555;
        font-size: 14px;
    }

    /* Bio section */
   

    /* Heading and label styling */
    .modal-body p.card-text {
        margin-left: 10px;
    }

    /* Styling for individual sections */
    .modal-body .profile-info {
        margin-bottom: 20px;
    }

    .modal-body .profile-info span {
        color: #444;
        font-weight: 600;
    }
</style>

<div class="modal fade" id="viewProfileModal" tabindex="-1" aria-labelledby="viewProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="color: black;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewProfileLabel">User Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <style>
    /* General modal styling */
    .modal-body {
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Image styling */
    .modal-body img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /* Name styling */
    .modal-body span {
        font-weight: bold;
        color: #333;
        display: block;
        margin-top: 10px;
    }

    .modal-body .card-text {
        margin-bottom: 15px;
        color: #555;
        font-size: 14px;
    }

    /* Bio section */
   

    /* Heading and label styling */
    .modal-body p.card-text {
        margin-left: 10px;
    }

    /* Styling for individual sections */
    .modal-body .profile-info {
        margin-bottom: 20px;
    }
    
    .modal-body .profile-info span {
        color: #444;
        font-weight: 600;
    }
</style>

<div class="modal-body" id="modalBodyContent">
    <?php
    $imagePath = 'uploads/' . $profile['user_id'] . '_test.jpg';
    if (!empty($profile['user_id'])) {
        echo '<img class="img-fluid" style="width: 150px; height: 150px; radius: 50px; object-fit: cover;" src="' . $imagePath . '">';
    } else {
        echo '<img class="img-fluid" style="width: 150px; height: 150px; object-fit: cover;" src="../img/code.png">';
    }
    ?>
    <br>
    <div class="profile-info border-top border-bottom pb-2 pt-2">
        <span>Name</span>
        <p class="card-text"><?= $profile['firstname'] . " " . $profile['lastname']; ?></p>
    </div>
    
    <div class="profile-info border-bottom pb-2">
        <span>Bio</span>
        <p class="card-text"><?= $fetchinfo['bio'] ?></p>
    </div>

    <div class="profile-info border-bottom pb-2">
        <span>Email</span>
        <p class="card-text"><?= $profile['email'] ?></p>
    </div>

    <div class="profile-info border-bottom pb-2">
        <span>Birthday</span>
        <p class="card-text"><?= $fetchinfo['birthday'] ?></p>
    </div>

    <div class="profile-info border-bottom pb-2">
        <span>Section</span>
        <p class="card-text"><?= $fetchinfo['section'] ?></p>
    </div>

    <div class="profile-info border-bottom pb-2">
        <span>Contact</span>
        <p class="card-text"><?= $fetchinfo['contact'] ?></p>
    </div>

    <div class="profile-info border-bottom pb-2">
        <span>Address</span>
        <p class="card-text"><?= $fetchinfo['address'] ?></p>
    </div>

    <div class="profile-info">
        <span>Email</span>
        <p class="card-text"><?= $fetchinfo['email'] ?></p>
    </div>
</div>

        </div>
    </div>
</div>