<?php
session_start();
include("include/config.php"); // Update with your database connection
$db = $con;

if (isset($_POST['submit'])) {
    $puname = mysqli_real_escape_string($con, $_POST['username']);
    $ppwd = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($con, "SELECT id, password FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, 's', $puname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $uid, $hashedPassword);
    mysqli_stmt_fetch($stmt);

    if (password_verify($ppwd, $hashedPassword)) {
        $_SESSION['login'] = $puname;
        $_SESSION['id'] = $uid;
        $pid = $uid;
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;

        // Store login information using prepared statement
        $logStmt = mysqli_prepare($db, "INSERT INTO userlog(uid, username, userip, status) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($logStmt, 'isii', $pid, $puname, $uip, $status);
        mysqli_stmt_execute($logStmt);

        header("location: dashboard.php");
    } else {
        // For storing log if user login unsuccessful
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 0;

        // Store login information using prepared statement
        $logStmt = mysqli_prepare($db, "INSERT INTO userlog(username, userip, status) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($logStmt, 'ssi', $puname, $uip, $status);
        mysqli_stmt_execute($logStmt);

        $_SESSION['errmsg'] = "Invalid username or password";
        header("location: user-login.php");
    }

    // Close prepared statements
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($logStmt);
}

// Close the database connection
mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>User-Login</title>

    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>

<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../index.php">
                    <h2> PureDent | Patient Login</h2>
                </a>
            </div>

            <div class="box-login">
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your email and password to log in.<br />
                            <span
                                style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="username" placeholder="Email">
                                <i class="fa fa-user"></i> </span>
                        </div>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" class="form-control password" name="password"
                                    placeholder="Password">
                                <i class="fa fa-lock"></i>
                            </span><a href="forgot-password.php">
                                Forgot Password ?
                            </a>
                        </div>
                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                        <div class="new-account">
                            Don't have an account yet?
                            <a href="registration.php">
                                Create an account
                            </a>
                        </div>
                    </fieldset>
                </form>

                <div class="copyright">
                    </span><span class="text-bold text-uppercase">Copyright ©2023 PureDent.</span>.
                </div>

            </div>

        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/login.js"></script>
    <script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
    </script>

</body>
<!-- end: BODY -->

</html>