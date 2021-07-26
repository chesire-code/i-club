<?php
session_start();

if (isset($_GET["error"])) {
    #Attempt to load page through the URL (wrong way)
    if (!isset($_GET["error"]) == "noneloggedin") {
        header("location : ../signup.php?error=notcool");
    }
    if ($_GET["error"] == "notcool") {
        echo "<p>Not cool what you tried to do, NOT COOL!</p>";
    }
} else {
    header("location: ../signup.php?error=notcool");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i-club | Profile</title>
    <link rel="stylesheet" href="includes\bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <hr>
                <div class="jumbotron">
                    <h1>
                        <?php
                        echo "<p>" . $_SESSION["user_name"] . "</p>";
                        ?>
                    </h1>
                    <p>You are logged in</p>
                </div>
                <hr>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <hr>
                <form action="logout.php" method="post">
                    <button class="btn btn-danger" type="submit" name="logout">Logout</button>
                </form>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <hr>
                <p class="lead">Setup a new club</p>
                <a href="javascript:void(0)"><button class="btn btn-outline-success"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Register a club</button></a>
                <hr>
                <p class="lead">Login to a your club account</p>
                <a href="javascript:void(0)"><button class="btn btn-outline-secondary"><i class="fa fa-sign-in" aria-hidden="true"></i> Login to your club</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="lead">Jumbo helper text</p>
                        <hr class="my-2">
                        <p>More info</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>