<?php
session_start();
require_once '../../classes/user.class.php';
require_once '../../tools/clean.php';

$objEdit = new Edit;
if($_SERVER['REQUEST_METHOD']){
    $user_id = ($_SESSION['user']['user_id']);

    
    $birthday = isset($_POST['birthday']) ? clean_input($_POST['birthday']) : '';
    $section = isset($_POST['section']) ? clean_input($_POST['section']) : '';
    $bio = isset($_POST['bio']) ? clean_input($_POST['bio']) : '';
    $contact = isset($_POST['contact']) ? clean_input($_POST['contact']) : '';
    $address = isset($_POST['address']) ? clean_input($_POST['address']) : '';
    $email = isset($_POST['email']) ? clean_input($_POST['email']) : '';

    $errors = [];

    if(empty($birthday)){
        $errors['birthday'] = "Birthday is required";
    }

    if(empty($section)){
        $errors['section'] = "Section is required";
    }

    if(empty($bio)){
        $errors['bio'] = "Bio is required";
    }

    if(empty($contact)){
        $errors['contact'] = "Contact is required";
    }

    if(empty($address)){
        $errors['address'] = "Address is required";
    }

    if(empty($email)){
        $errors['email'] = "Email is required";
    }

    if(!empty($errors)){
        echo json_encode([
            'status' => 'error',
            'errors' => $errors
        ]);
        exit;
    }

    $objEdit->edit_user($user_id, $birthday, $bio, $contact, $address, $email);
    echo json_encode([
        'status' => 'success'
    ]);
}
?>