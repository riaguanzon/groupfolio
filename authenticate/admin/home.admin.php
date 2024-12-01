<?php 
    session_start();
    if (empty($_SESSION["user"])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION["user"]["username"]?>!</h1>
</body>
</html>
<br><a href="../auth/logout.php">logout</a>