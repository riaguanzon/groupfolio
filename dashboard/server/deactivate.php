<?php
session_start();
require_once "../../classes/user.class.php";

$userObj = new Edit;

$userObj->deact($_SESSION['user_id_deact']);

$_SESSION['user_id_deact'] = '';
?>