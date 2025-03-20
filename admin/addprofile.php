<?php 
    require_once "../includes/header.php";
  
  
?>
    <link rel="stylesheet" href="../style/profilepic.css">
    <title>Upload Profile</title>
</head>
<body>
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <div class="image-preview" id="image-preview">
            <img src="../img/profile.png" alt="">
        </div>
        <h2>Add Profile Picture</h2>
        <input type="file" name="file" id="profile-picture" accept="image/*" onchange="previewImage(event)">
        <button type="submit" name="submit">Upload</button>
    </form>
    <script src="../js/profilepic.js"></script>
</body>

</html>