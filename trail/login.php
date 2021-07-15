<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="includes\bootstrap\bootstrap.min.css" />
    <script src="includes\bootstrap\jQuery.js" async="off"></script>
    <script src="includes\bootstrap\bootstrap.min.js" async="off"></script>

</head>

<!--
  Variables
  ---------
  $email_login
  $pass_word_login
-->

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-4 col-md-6 col-sm-4">
                <hr />
                <p class="lead">Login to <a href="./">i - club</a></p>
                <hr />
                <form action="form.php" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email..." autocomplete="off" required />
                        <small id="emailHelpId" class="form-text text-muted">Type your email in the input space above. It's required</small>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Password..." autocomplete="off" required />
                        <small id="emailHelpId" class="form-text text-muted">Type your email password in the input space above. It's
                            required</small>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="cookie_create" id="" value="checkedValue" checked />
                            Remember Me
                        </label>
                        <small id="emailHelpId" class="form-text text-muted">When checked, the next time you come back to the site, you will
                            be automatically logged in</small>
                    </div>
                    <hr />
                    <button type="submit" name="submit2" class="btn btn-outline-secondary">
                        Submit
                    </button>
                    <hr>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emailexist") {
                            echo "<p>The email you used has already been taken. You may want to login</p>";
                        }

                        if ($_GET["error"] == "doesnotexist") {
                            echo "<p>No such email/username exists you may want to sign up<a href='signup.php'> Sign Up Here</a></p>";
                        }

                        #Wrong login password
                        if ($_GET["error"] == "wrongpassword") {
                            echo "<p>Wrong login credentials please try again OR <a href = './signup.php'>sign up</a></p>";
                        }
                    } else {
                        echo "<footer>
            <p>Don't have an account?<a href='signup.php'> Sign Up Here</a></p>
        </footer>";
                    }
                    ?>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
        </div>
    </div>
</body>

</html>