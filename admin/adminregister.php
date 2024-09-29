<?php
include "../connection.php";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="color: white;">
                    Register Admin
                </div>
                <div class="login-form">
                    <form name="form1" action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="usernameadmin" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="passwordadmin" class="form-control" placeholder="Password">
                        </div>

                        <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="alert alert-success" id="success" style="margin-top: 10px; display:none">
                            <strong>Success!</strong> Account Registration Successful!!.
                        </div>

                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display:none">
                            <strong>Already Exist!</strong> This Username Already Exists!!.
                        </div>
                        <div class="alert alert-warning" id="warning" style="margin-top: 10px; display:none">
                            <strong>Warning!</strong>Please Enter Valid Information.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['usernameadmin'])) {
        $user = $_POST['usernameadmin'];
    }
    if (isset($_POST['passwordadmin'])) {
        $pass = $_POST['passwordadmin'];
    }
    if (isset($_POST["submit1"]) && ($user == null || $pass == null)) {
    ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("failure").style.display = "none";
            document.getElementById("warning").style.display = "block";
        </script>
        <?php
    } else if (isset($_POST["submit1"])) {
        $count = 0;
        include "../connection.php";
        $sql = "SELECT * FROM admin where username ='$_POST[usernameadmin]'" or die(mysqli_error($conn));
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
        ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("failure").style.display = "block";
            </script>
        <?php
        } else {
            include "../connection.php";
            mysqli_query($conn, "INSERT INTO admin VALUES (NULL,'$_POST[usernameadmin]','$_POST[passwordadmin]')") or die(mysqli_error($conn));
        ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display = "none";
                document.getElementById("success").style.display = "block";
            </script>
    <?php

        }
    }

    ?>



    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>