<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font -->
    <link rel="stylesheet" href="http://localhost/briomar__framework/font/font.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/CSS%20frameworks/Bootstrap/Bootstrap%204.5.2/bootstrap-4.5.2-dist/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-image: radial-gradient(white, dodgerblue);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-lg-4">
            <div class="jumbotron">
                <h1>
                    <?php
                    echo "<p>" . $_SESSION["user_name"] . "</p>";
                    ?>
                </h1>
                <p>You are logged in</p>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["error"])) {
        #User tries getting in through the URL (wrong way)
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
    <footer>
        <form action="logout.php" method="post">
            <button class="btn btn-danger" type="submit" name="logout">Logout</button>
        </form>
    </footer>
</body>

</html>