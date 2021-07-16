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
    <title>MVC</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="includes\bootstrap\bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-4 col-md-6 col-sm-4">
                <hr />
                <p class="lead">Sign Up at <a href="./">i - club</a></p>
                <hr />
                <form action="form.php" method="post">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="fname" id="" aria-describedby="emailHelpId" placeholder="First Name..." autocomplete="off" required />
                        <small id="emailHelpId" class="form-text text-muted">Type your first name in the input space above. It's required</small>
                    </div>
                    <div class="form-group">
                        <label for="">Second Name</label>
                        <input type="text" class="form-control" name="sname" id="" aria-describedby="emailHelpId" placeholder="Second Name..." autocomplete="off" required />
                        <small id="emailHelpId" class="form-text text-muted">Type your second name in the input space above. It's required</small>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email..." autocomplete="off" required />
                        <small id="emailHelpId" class="form-text text-muted">Type your email in the input space above. It's required</small>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="pwd" id="" aria-describedby="emailHelpId" placeholder="Password..." autocomplete="off" required />
                        <small id="emailHelpId" class="form-text text-muted">Type your email password in the input space above. It's
                            required</small>
                    </div>
                    <hr />
                    <button type="submit" name="submit" class="btn btn-outline-secondary">
                        Submit
                    </button>
                </form>
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
            <p>Have an account?<a href='login.php'> Log In Here</a></p>
        </footer>";
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
</body>

</html>