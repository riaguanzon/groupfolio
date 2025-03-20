<?php 
session_start();
require_once '../../classes/request.class.php';

$objRequest = new Request;

$objRequest->accept($_SESSION['user_request']);
$_SESSION['user_request'] = '';
echo json_encode([
    'status' => 'success'
]);
?>
