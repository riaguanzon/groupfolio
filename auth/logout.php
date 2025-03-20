<?php
session_start();
session_destroy();
header('Location: ../admin/groupfolio.php');
exit;
?>