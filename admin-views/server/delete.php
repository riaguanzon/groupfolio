<?php
session_start();
require_once '../../classes/delete.class.php';

$objData = new Delete;

$project_id = $_SESSION['project_id'];

$objData->delete($project_id);
$_SESSION['project_id'] = '';
echo json_encode([
    'status' => 'success'
]);
