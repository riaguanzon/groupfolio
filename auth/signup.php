<?php
session_start();
require_once '../classes/admin.class.php';
require_once '../tools/clean.php';

$objUser = new User;

$lastname = $firstname = $email = $username = $email = $password = $confirm_password = '';
$lastnameErr = $firstnameErr = $emailErr = $usernameErr = $email = $passwordErr = $confirm_passwordErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = ($_POST['lastname']) ? clean_input($_POST['lastname']) : '';
    $firstname = ($_POST['firstname']) ? clean_input($_POST['firstname']) : '';
    $email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
    $username = isset($_POST['username']) ? clean_input($_POST['username']) : '';
    $email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
    $password = isset($_POST['password']) ? clean_input($_POST['password']) : '';
    $confirm_password = isset($_POST['confirm_password']) ? clean_input($_POST['confirm_password']) : '';

    if (empty($lastname)) {
        $lastnameErr = ' Lastname is required!';
    }
    if (empty($firstname)) {
        $firstnameErr = ' Firstname is required!';
    }
    if (empty($email)) {
        $emailErr = ' Email is required!';
    }
    if (empty($username)) {
        $usernameErr = ' Username is required!';
    }
    if (empty($password)) {
        $passwordErr = ' Password is required!';
    }
    if (empty($confirm_password)) {
        $confirm_passwordErr = ' Confirm password is required!';
    } else if ($confirm_password != $password) {
        $confirm_passwordErr = ' Confirm password does not match!';
    }
    if ($objUser->record_exist($username) == true) {
        $usernameErr = ' Username exists!';
    } else {
        $objUser->create_account($lastname, $firstname, $email, $username, $password);
    }
}
?>

<?php
require_once "../includes/header.php";
?>
<link rel="stylesheet" href="../style/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<title>Sign Up</title>
</head>

<body>
    <section>
        <div class="p-container">
            <div class="mid">
                <div class="header">
                    <a href="../admin/groupfolio.php"><img src="../img/code.png" alt="" style="height: 80px"></a>
                    <h1>Sign Up</h1>
                </div>
                <br>
                <div class="c-container">
                    <form method="post">
                        <div class="f_child mb-2">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating <?= !empty($lastnameErr) ? 'is-invalid' : ''; ?>">
                                        <input type="text" class="form-control <?= !empty($lastnameErr) ? 'is-invalid' : ''; ?>" id="lastname" name="lastname" placeholder="Enter Lastname">
                                        <label for="lastname">Lastname</label>
                                        <div class="invalid-feedback">
                                            <span><?= $lastnameErr; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Firstname Field -->
                                <div class="col-md-6">
                                    <div class="form-floating <?= !empty($firstnameErr) ? 'is-invalid' : ''; ?>">
                                        <input type="text" class="form-control <?= !empty($firstnameErr) ? 'is-invalid' : ''; ?>" id="firstname" name="firstname" placeholder="Enter Firstname">
                                        <label for="firstname">Firstname</label>
                                        <div class="invalid-feedback">
                                            <span><?= $firstnameErr; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating <?= !empty($emailErr) ? 'is-invalid' : ''; ?> mb-3">
                                <input type="text" class="form-control <?= !empty($emailErr) ? 'is-invalid' : ''; ?>" id="floatingInputGroup2" name="email" placeholder="Enter Email">
                                <label for="floatingInputGroup2">Email</label>
                                <div class="invalid-feedback">
                                    <span><?= $emailErr; ?></span>
                                </div>
                            </div>
                            <div class="form-floating <?= !empty($usernameErr) ? 'is-invalid' : ''; ?> mb-3">
                                <input type="text" class="form-control <?= !empty($usernameErr) ? 'is-invalid' : ''; ?>" id="floatingInputGroup2" name="username" placeholder="Enter Username">
                                <label for="floatingInputGroup2">Username</label>
                                <div class="invalid-feedback">
                                    <span><?= $usernameErr; ?></span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-floating <?= !empty($passwordErr) ? 'is-invalid' : ''; ?> mb-3 position-relative">
                                        <input type="password" class="form-control <?= !empty($passwordErr) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Enter Password">
                                        <label for="password">Password</label>
                                        <button type="button" class="btn position-absolute top-50 end-0 translate-middle-y me-3 p-0 bg-transparent border-0" onclick="togglePasswordVisibility('password')">
                                            <i id="passwordToggleIcon" class="bi bi-eye"></i>
                                        </button>
                                        <div class="invalid-feedback">
                                            <span><?= $passwordErr; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating <?= !empty($confirm_passwordErr) ? 'is-invalid' : ''; ?> mb-3 position-relative">
                                        <input type="password" class="form-control <?= !empty($confirm_passwordErr) ? 'is-invalid' : ''; ?>" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                        <label for="confirm_password">Confirm Password</label>
                                        <button type="button" class="btn position-absolute top-50 end-0 translate-middle-y me-3 p-0 bg-transparent border-0" onclick="togglePasswordVisibility('confirm_password')">
                                            <i id="confirmPasswordToggleIcon" class="bi bi-eye"></i>
                                        </button>
                                        <div class="invalid-feedback">
                                            <span><?= $confirm_passwordErr; ?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="dont">
                            <p>Already have an Account? <a href="login.php">Sign In!</a></p>
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"></script>

    <script>
        function togglePasswordVisibility(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const icon = document.getElementById(fieldId + 'ToggleIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }
    </script>
</body>

</html>