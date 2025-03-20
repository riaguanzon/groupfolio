<?php
session_start();
if (empty($_SESSION["user"])) {
    header("location: ../admin/groupfolio.php");
}
require_once '../classes/projects.class.php';
require_once '../tools/clean.php';

$objProjects = new Projects;
$projects = $title =  $description =  "";
$objProjects->user_id = $_SESSION['user']['user_id'];
$projects = $objProjects->ac();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $proj = ($_POST['projects']);
    $title = isset($_POST['title']) ? clean_input($_POST['title']) : '';
    $description = isset($_POST['description']) ? clean_input($_POST['description']) : '';


    $objProjects->user_id = $_SESSION['user']['user_id'];
    $objProjects->projects = $proj;
    $objProjects->title = $title;
    $objProjects->description = $description;
    if ($objProjects->addprojects()) {
        // Redirect to the Location: after successful insertion
        header('Location: addimg.php');
    } else {
        // Display an error message if something went wrong during insertion
        echo 'Something went wrong when adding the new product. ';
    }
}

?>

<?php 
    require_once "../includes/header.php";
?>
    <link rel="stylesheet" href="../style/project.css">
    <title>Add Projects</title>
</head>

<body>
   
    <div class="parent">

        <form action="" method="POST"> 
            <a href="dashboard.php"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i></a>
            <div class="form">
                <h1>Projects</h1>
                <p>Please indicate the following</p>
                <span>Link: </span><input type="text" name="projects" id="projects">
                <br>
                <br>
                <span>Title: </span><input type="text" name="title" id="title">
                <br>
                <br>
                <span>Description: </span><input type="text" name="description" id="description">
                <br>
                <br>
                <input type="submit" value="Proceed" name="submit">
        </form>
        <br>

    </div>
    </div>
    <script src="https://kit.fontawesome.com/66216b0ead.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>