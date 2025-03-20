<?php
session_start();
if (empty($_SESSION["user"])) {
    header("location: ../admin/groupfolio.php");
}

?>

<?php
require_once "../includes/header.php";
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../style/home.admin.css">
</head>

<body>
    <section>
        <div class="parent">
            <div class="child">
                <br>
                <h1>Welcome, <?php echo $_SESSION["user"]["username"] ?>!</h1>
                <div class="button">
                    <a href="setup.php">Set up your Profile</a>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<!-- <div class="log"><br><a href="../auth/logout.php">logout</a></div> -->