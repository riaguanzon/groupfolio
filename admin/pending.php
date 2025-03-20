<?php
require_once "../includes/header.php";
?>
<title>Pending</title>
<link rel="stylesheet" href="../style/pending.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<div class="center-container">
    <h1>Wait after 1-3 business days for the confirmation</h1>
    <div class="button-container">
        <a href="../admin/groupfolio.php">
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svgIcon">

                    <path d="M15 19l-7-7 7-7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </a>
    </div>
    <div class="loading-animation">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<?php require_once '../includes/__scripts.php'; ?>