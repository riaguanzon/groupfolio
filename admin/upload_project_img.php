<?php
session_start();
require_once "../classes/user.class.php";
require_once "../classes/projects.class.php";

$objProjects = new Projects;
$objProjects->user_id = $_SESSION['user']['user_id'];
$project_id = $objProjects->image();



if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $user_id = $_SESSION['user']['user_id']; // Assuming a unique username is stored in the session after login
    

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


    $allowed = array('jpg', 'jpeg', 'png', 'webp'); // You can keep other types here for validation

    // We don't care about the actual extension, force .jpg
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 100000000000) {
                // Force .jpg extension
                $fileNameNew =  $user_id .  $project_id . "_test.jpg";
                $fileDestination = 'upload_proj_img/' . $fileNameNew;

                // Move uploaded file
                move_uploaded_file($fileTmpName, $fileDestination);

                // Redirect after successful upload
                header("Location: dashboard.php");
                exit();
            } 
        } 
    } 
}
