<!-- Modal for Deleting User -->

<?php
session_start();
require_once '../classes/user.class.php';

$objUser = new User(); // Assuming you have a User class to handle DB operations
$response = [];

// Check if user_id is passed in the request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];

    // Call the method from your User class to delete the user
    $result = $objUser->deleteUser($userId); // deleteUser is the method for deleting the user

    if ($result) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
} else {
    $response['status'] = 'error';
}

echo json_encode($response); // Return the response as JSON
?>

<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-delete-user">
                <div class="modal-body">
                    Are you sure you want to delete this user? This action cannot be undone.
                    <input type="hidden" name="user_id" id="delete_user_id"> <!-- Hidden user_id input -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
