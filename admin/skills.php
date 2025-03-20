<?php
session_start();
if (empty($_SESSION["user"])) {
    header("location: ../auth/login.php");
}

require_once '../classes/skills.class.php';
require_once '../tools/clean.php';

$skills = "";
$objSkills = new Skills;
$objSkills->user_id = $_SESSION['user']['user_id'];
$skills = $objSkills->acc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skillsArray = $_POST['skills'];
    $objSkills->user_id = $_SESSION['user']['user_id'];
    $objSkills->skills = $skillsArray;

    if ($objSkills->addSkills()) {
        header("Location: talent.php");
        exit;
    } else {

        echo 'Something went wrong when adding the new product. ';
    }
}
// var_dump($_POST['skills']);

?>

<?php require_once "../includes/header.php"; ?>
<link rel="stylesheet" href="../style/skills.css">
<title>Profiling</title>
</head>

<body>

    <div class="container mt-5">
        <form action="" method="POST">
            <div class="image"></div>
            <br><br>
            <div class="form">
                <h3 class="text-center">Programming Skills</h3>
                <p>Input Proficient Programming Language</p>
                <div class="skills-center">
                    <div id="dynamicInputs">
                        <div class="input-group mb-2">
                            <input type="text" name="skills[]" class="form-control"> &nbsp;
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
                    <a href="talent.php">Skip</a>
                    <input type="submit" value="Proceed" name="submit">
                </div>
            </div>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/66216b0ead.js" crossorigin="anonymous"></script>
    <script src="../js/skills.js"></script>
</body>

</html>