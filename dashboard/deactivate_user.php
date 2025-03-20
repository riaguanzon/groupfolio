<?php
require_once '../classes/user.class.php';

// Ensure the user is logged in and is an admin
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
    // Redirect if the user is not an admin
    header("Location: login.php");
    exit();
}

// Check if the user_id is passed via the GET request
if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Create an instance of the Edit class
    $obj = new Edit();

    // Call the method to deactivate the user
    $result = $obj->deactivate_user($user_id);

    if ($result) {
        // Redirect back to the team page with a success message
        header("Location: team.php?status=deactivated");
        exit();
    } else {
        // If deactivation failed, show an error message
        echo "Error deactivating user.";
    }
} else {
    // If no user ID is provided, redirect back
    header("Location: team.php");
    exit();
}
?>
