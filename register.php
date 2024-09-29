<?php
include "connection.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3>Register Now</h3>

            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="row">

                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>
                                </div>

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
    </div>

    <?php
    $username = $_POST['username'];
    $pass = $_POST['password'];
    if (isset($_POST["submit1"]) && ($username == null || $pass == null)) {
    ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("failure").style.display = "none";
            document.getElementById("warning").style.display = "block";
        </script>
        <?php
    } else if (isset($_POST["submit1"])) {
        $count = 0;
        include "connection.php";
        $sql = "SELECT * FROM users where username ='$_POST[username]'" or die(mysqli_error($conn));
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
            include "connection.php";
            mysqli_query($conn, "INSERT INTO users VALUES (NULL,'$_POST[username]','$_POST[password]')") or die(mysqli_error($conn));
        ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display = "none";
                document.getElementById("success").style.display = "block";
            </script>
    <?php

        }
    }

    ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>