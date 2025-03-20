<?php
session_start();
if (empty($_SESSION["user"])) {
    header("location: ../auth/login.php");
}

require_once '../classes/certificate.class.php';
require_once '../tools/clean.php';

$certificate = '';
$objCertificate = new Certificates;
$objCertificate->user_id = $_SESSION['user']['user_id'];
$certificate = $objCertificate->fetchcertificate();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $certificateArray = $_POST['certificate'];
    $objCertificate->user_id = $_SESSION['user']['user_id'];
    $objCertificate->certificate = $certificateArray;

    if ($objCertificate->addcertificate()){
        header("Location: addprofile.php");
        exit;
    } else {
        // Display an error message if something went wrong during insertion
        echo 'Something went wrong when adding the new product. ';
    }
}
?>

<?php
require_once "../includes/header.php";
?>
<link rel="stylesheet" href="../style/talent.css">
<title>Profiling</title>
</head>

<body>
    <div class="container mt-5">
        <form action="" method="POST">
            <div class="image">
                <!-- <img src="../img/null.png" alt="">
                <h1 class="text-center">Welcome <?php echo $_SESSION["user"]["username"] ?>!</h1> -->
            </div>
            <br>
            <br>
            <div class="form">
                <h3 class="text-center">Achievements</h3>
                <p>Your carrier Achievements</p>
                <div class="skills-center">
                    <div id="dynamicInputs">
                        <div class="input-group mb-2">
                            <input type="text" name="certificate[]" class="form-control"> &nbsp;
                            <i class="fa-solid fa-xmark" style="cursor: pointer;" onclick="this.parentElement.remove()"></i>
                        </div>
                    </div>
                </div>
                <div class="add">
                    <button type="button" class="icon-btn add-btn" onclick="addInputField()">
                        <div class="add-icon"></div>
                        <div class="btn-txt" style="color: white;">Add More &nbsp;</div>
                    </button>
                </div>
                <br>
                <div class="left">
                    <a href="addprofile.php">Skip</a>
                    <input type="submit" value="Proceed" name="submit">
                </div>
            </div>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/66216b0ead.js" crossorigin="anonymous"></script>
    <script src="../js/cert.js"></script>
</body>

</html>