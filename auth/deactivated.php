<?php
session_start();
session_destroy();
require_once "../includes/header.php";

?>
<title>Deactivated</title>
<link rel="stylesheet" href="../style/pending.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<div class="center-container">
    <h1>Your account was deactivated by the Admin</h1>
    <h5 class="text-white">Here are some of the reasons why we deactivated your account:</h5>
    <br>
    <div class="reasons text-start lh-lg ">
        <ul class="text-white">
            <li>Violation of Terms of Service: Engaging in activities that go against the platform's rules or policies.</li>
            <li>Inactivity: Prolonged inactivity or failure to use the account over an extended period.</li>
            <li>Suspicious Activity: Unusual or potentially fraudulent behavior detected on your account.</li>
            <li>Request by User: Account deactivation at your request or by someone with authority over the account.</li>
            <li>Policy Update Compliance: Failing to adhere to new policies or updates introduced by the platform.</li>
        </ul>
    </div>
    <h3></h3>
    <div class="button-container">
        <a href="../admin/groupfolio.php">
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svgIcon">

                    <path d="M15 19l-7-7 7-7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </a>
    </div>
   
</div>
<?php require_once '../includes/__scripts.php'; ?>