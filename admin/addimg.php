<?php
session_start();
require_once "../includes/header.php";
require_once "../classes/user.class.php";
require_once "../classes/projects.class.php";

$objProjects = new Projects;
$objProjects->user_id = $_SESSION['user']['user_id'];
$project_id = $objProjects->image();

// var_dump($project_id);
?>
<link rel="stylesheet" href="../style/project_img.css">
<title>Upload Preview</title>
</head>

<body>
    <form action="upload_project_img.php" method="POST" enctype="multipart/form-data">
        <div class="image-preview" id="image-preview">
            <img src="../img/code.png" alt="">
        </div>
        <h2>Site Preview</h2>
        <label for="profile-picture" class="file-input-label">
            <input type="file" name="file" id="profile-picture" accept="image/*" onchange="previewImage(event)">
        </label>

        <button type="submit" name="submit">Upload</button>
    </form>
    <script src="../js/profilepic.js"></script>
</body>

</html>