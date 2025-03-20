<?php
// Include the necessary files and initialize classes
session_start();
if (empty($_SESSION["user"])) {
    header("location: ../admin/groupfolio.php");
}

require_once '../classes/projects.class.php';
require_once '../classes/certificate.class.php';
require_once '../classes/infos.class.php';
require_once '../classes/skills.class.php';
require_once '../classes/admin.class.php';
require_once '../classes/talent.class.php';
require_once '../tools/clean.php';

$objInfos = new Infos;
$objUser = new User;
$objSkills = new Skills;
$objProjects = new Projects;
$objTalents = new Talents;
$objCertificate = new Certificates;

$objInfos->user_id = $_SESSION['user']['user_id'];
$objSkills->user_id = $_SESSION['user']['user_id'];
$objProjects->user_id = $_SESSION['user']['user_id'];
$objTalents->user_id = $_SESSION['user']['user_id'];
$objCertificate->user_id = $_SESSION['user']['user_id'];

$user_details = $objInfos->user_info();
$fetchimage = $objUser->fetchimage($_SESSION['user']['user_id']);
$fetchimg = $objUser->fetchallimage();
$projects = $objProjects->ac();  
$infos = $objInfos->account();
$skills = $objSkills->acc();
$talent = $objTalents->fetchtalent();
$certificate = $objCertificate->fetchcertificate();
$name = $objUser->name();
$pending_requests = $objInfos->all_pending();
$projimg = $objProjects->getimage();


// Define the directory where the images are stored
$uploadDir = 'uploads/';

// Get all files in the uploads directory
$files = array_diff(scandir($uploadDir, SCANDIR_SORT_DESCENDING), array('..', '.')); // Get files in descending order (newest first)

// Check if there are any images uploaded
if (empty($files)) {
    echo 'No images uploaded yet.';
} else {
    // Get the first file from the sorted array (most recently uploaded)
    $latestFile = $files[0];
    $filePath = $uploadDir . $latestFile;
}
if (isset($_GET['id'])) {
    $project_id = $_GET['id'];

    // Instantiate the Projects class and delete the project
    // $project = new Projects();
    // $project->user_id = 1; 

    // Delete the project
    if ($project->deleteProject($project_id)) {
        echo "<script>alert('Project deleted successfully.'); window.location.href='portfolio.php';</script>";
    } else {
        echo "<script>alert('Error deleting project.'); window.location.href='portfolio.php';</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../packages/css/swiper-bundle.min.css">
    <?php require_once '../includes/__link.php' ?>
    <link rel="stylesheet" href="../packages/css/styles.css">
    <link rel="stylesheet" href="../style/admin.dashboard.css">
    <link rel="icon" href="../img/code.png">
    <title>grouportlio</title>
</head>
<body>

    <!--==================== HEADER ====================-->

    <?php require_once '../dashboard/header.php' ?>

    <!--==================== HEADER ====================-->




    <!--==================== SKILLS ====================-->

    <?php require_once '../dashboard/skills.php' ?>

    <!--==================== SKILLS ====================-->




    <!--==================== QUALIFICATION ====================-->

    <?php require_once '../dashboard/qualifications.php' ?>

    <!--==================== QUALIFICATION ====================-->




    <!--==================== PORTFOLIO ====================-->

    <div class="delete-modal"></div>
    <?php require_once '../dashboard/portfolio.php' ?>

    <!--==================== PORTFOLIO ====================-->




    <!--==================== TEAM ====================-->
    <div class="delete_user"></div>
    <?php require_once '../dashboard/team.php' ?>

    <!--==================== TEAM ====================-->




    <!--==================== FOOTER ====================-->

    <?php require_once '../dashboard/footer.php' ?>

    <!--==================== FOOTER ====================-->







    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <script src="https://kit.fontawesome.com/66216b0ead.js" crossorigin="anonymous"></script>
    <script src="../js/dashboard.js"></script>

    <!--==================== SWIPER JS ====================-->
    <script src="../packages/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="../packages/js/main.js"></script>
    <?php require_once '../includes/__scripts.php' ?>
</body>

</html>