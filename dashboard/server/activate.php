<?php
session_start();
require_once "../../classes/user.class.php";

$userObj = new Edit;

$userObj->activate($_SESSION['user_id_activate']);

$_SESSION['user_id_activate'] = '';
?>