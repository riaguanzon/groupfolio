<?php
session_start();
if (empty($_SESSION["user"])){
    header("location: ../auth/login.php");
}
require_once '../classes/skills.class.php';
require_once '../tools/clean.php';

$objSkills = new Skills;
$skills = "";
$objSkills->user_id = $_SESSION['user']['user_id'];
$skills = $objSkills->acc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skill = isset($_POST['skills']) ? clean_input($_POST['skills']) : '';

    $objSkills->user_id = $_SESSION['user']['user_id'];
    $objSkills->skills = $skill;


  

    if ($objSkills->addskills()) {
        // Redirect to the Location: after successful insertion
        header('Location: dashboard.php');
    } else {
        // Display an error message if something went wrong during insertion
        echo 'Something went wrong when adding the new product. ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Skills</title>
</head>
<body>
<div class="parent">
        <div class="form">
            <h1>Projects</h1>
            <p>Share us your at least 6 personal skills or talent!</p>
            <form action="" method="POST">
                <span>Skill </span><input type="text" name="skills" id="skills">
                <br>
                <input type="submit" value="Proceed" name="submit">
            </form>
            <br>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>