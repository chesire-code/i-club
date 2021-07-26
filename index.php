<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="includes\bootstrap\bootstrap.min.css">
    <script src="includes\bootstrap\jQuery.js"></script>
    <script src="includes\bootstrap\bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- 
        <a href="signup.php">Sign Up</a> <br>
    <a href="login.php">Log In</a>
     -->
    <div class="container">
        <h1 class="display-4">i-club</h1>
        <hr>
        <a href="signup.php"><button class="btn btn-outline-primary">Sign Up</button> </a> &nbsp;
        <a href="login.php"><button class="btn btn-outline-success">Login</button> </a>
        <hr>
        <div class="form-inline">
            <header class="lead">Why Sign Up? &nbsp; </header>
            <button class="btn btn-outline-secondary minimize">
                Click Me!
            </button>
        </div>
        <hr>
        <div class="jumbotron">
            <p>Signing up introduces you to more content offfered by our site, you get to experience cool fetures of our website. Signing Up also helps enables you to get 50% off all our paid items. We also have a surprise waiting for you... Sign up today!!</p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".minimize").click(function() {
                $(".jumbotron").toggle(500);
            });
        });
    </script>
</body>

</html>