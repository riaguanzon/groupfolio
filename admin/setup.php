<?php
session_start();
require_once '../classes/infos.class.php';
require_once '../tools/clean.php';

$objInfos = new Infos;
$user_id = $lastname = $firstname = $middleini = $birthday = $bio = $contact = '';
$lastnameErr = $firstnameErr = $middleiniErr = $birthdayErr = $bioErr = $contactErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = isset($_POST['lastname']) ? clean_input($_POST['lastname']) : '';
    $firstname = isset($_POST['firstname']) ? clean_input($_POST['firstname']) : '';
    $middleini = isset($_POST['middleini']) ? clean_input($_POST['middleini']) : '';
    $birthday = isset($_POST['birthday']) ? clean_input($_POST['birthday']) : '';
    $bio = isset($_POST['bio']) ? clean_input($_POST['bio']) : '';
    $contact = isset($_POST['contact']) ? clean_input($_POST['contact']) : '';


    if (empty($lastname)) {
        $lastnameErr = '*Lastname is Required!';
    }
    if (empty($firstname)) {
        $firstnameErr = '*Firstname is Required!';
    }
    if (empty($middleini)) {
        $middleiniErr = '*Middle Initial is Required!';
    }
    if (empty($contact)) {
        $contactErr = '*Contact is Required!';
    }
    if (empty($lastnameErr) && empty($firstnameErr) && empty($middleiniErr) && empty($contactErr)) {
        $objInfos->user_id = $_SESSION['user_credentials']['user_id'];
        $objInfos->lastname = $lastname;
        $objInfos->firstname = $firstname;
        $objInfos->middleini = $middleini;
        $objInfos->contact = $contact;

        if ($objInfos->add()) {
            // Redirect to the Location: after successful insertion
            header('Location: profile.php');
        } else {
            // Display an error message if something went wrong during insertion
            echo 'Something went wrong when adding the new product. ';
        }
    }
}
var_dump($_session['user_credentials']['user_id']);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/setup.css">
    <title>Profiling</title>
</head>

<body>
    <div class="parent">
        <div class="p-child">
            <img src="../img/null.png" alt="">
            <h1><?php echo $_SESSION["user"]["username"] ?>!</h1>
        </div>
        <div class="form">
            <form action="" method="POST">
                <label for="lastname">Last Name<span class="error"><?php $lastnameErr ?></span>
                    <input type="text" name="lastname" id="lastname">
                </label>
                <label for="firstname">First Name<span class="error"><?php $firstnameErr ?></span>
                    <input type="text" name="firstname" id="firstname">
                </label>
                <label for="middleini">Middle Initial<span class="error"><?php $middleiniErr ?></span>
                    <input type="text" name="middleini" id="middleini">
                </label>
                <label for="birthday">Birthday
                    <input type="date" name="birthday" id="birthday">
                </label>
                <label for="contact">Contact Number<span class="error"><?php $contactErr ?></span>
                    <input type="number" name="contact" id="contact">
                </label>
                <br>
                <br>
                <label for="bio">Bio
                    <textarea name="bio" id="bio" cols="40" rows="1"></textarea>
                </label>
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>