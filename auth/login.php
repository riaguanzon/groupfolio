<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location: ../admin/dashboard.php");
}

require_once '../classes/admin.class.php';
require_once '../tools/clean.php';


$username = $password = "";
$usernameErr = $passwordErr = $incorrect_credentials = "";
$allinputsfield = true;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = isset($_POST['username']) ? clean_input($_POST['username']) : '';
    $password = isset($_POST['password']) ? clean_input($_POST['password']) : '';

    if (empty($username)) {
        $usernameErr = '*Username is required!';
        $allinputsfield = false;
    }

    if (empty($password)) {
        $passwordErr = '*Password is required!';
        $allinputsfield = false;
    }

    if ($allinputsfield) {
        $objUser = new User();
        $objUser->login($username, $password);
        $incorrect_credentials = isset($_SESSION['incorrect_credentials']) ? $_SESSION['incorrect_credentials'] : '';
    }
}
?>

<?php
require_once "../includes/header.php";
?>
<link rel="stylesheet" href="../style/style.css">
<title>Login</title>
</head>

<body>
    <section>
        <div class="p-container">
            <div class="mid">
                <div class="header">
                    <a href="../admin/groupfolio.php"><img src="../img/code.png" alt="" style="height: 80px"></a>
                    <h1>Sign In</h1>
                </div>
                <br>
                <div class="c-container">
                    <form method="post">
                        <div class="f_child">
                            <span class="required"><?= $incorrect_credentials; ?></span>
                            <div class="form-floating mb-3 <?= !empty($usernameErr) ? 'is-invalid' : ''; ?>">
                                <input type="text" class="form-control <?= !empty($usernameErr) ? 'is-invalid' : ''; ?>" id="floatingInputGroup2" name="username" placeholder="Enter Username">
                                <label for="floatingInputGroup2">Username</label>
                                <div class="invalid-feedback">
                                    <span><?= $usernameErr; ?></span>
                                </div>
                            </div>
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control <?= !empty($passwordErr) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Enter password">
                                <label for="password">Password</label>
                                <button type="button" class="btn position-absolute top-50 end-0 translate-middle-y me-3 p-0 bg-transparent border-0" onclick="togglePasswordVisibility()">
                                    <i id="passwordToggleIcon" class="bi bi-eye"></i>
                                </button>
                                <div class="invalid-feedback">
                                    <span><?= $passwordErr; ?></span>
                                </div>
                            </div>
                            <br>
                            <div class="dont">
                                <p>Don't have an account yet? <a href="signup.php">Sign Up!</a></p>
                            </div>
                            <input type="submit" value="Sign In">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const passwordToggleIcon = document.getElementById('passwordToggleIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordToggleIcon.classList.remove('bi-eye');
                passwordToggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                passwordToggleIcon.classList.remove('bi-eye-slash');
                passwordToggleIcon.classList.add('bi-eye');
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</body>

</html>