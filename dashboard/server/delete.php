<?php
session_start();
require_once '../classes/delete.class.php';

$objDelete = new Delete;

if (isset($_GET['user_id'])) {
    // Delete user
    $delete_user = $objDelete->delete_user($_GET['user_id']);
    $_SESSION['user_id'] = $_GET['user_id']; // Store the user_id in session for further use
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Perform the user deletion
    $result = $objDelete->delete_user($user_id);

    // Check if deletion was successful and show a message
    if ($result) {
        $_SESSION['message'] = "User deleted successfully!";
    } else {
        $_SESSION['message'] = "Failed to delete the user.";
    }

    // Redirect back to the page
    header("Location: your_page.php");
    exit();
}
?>
