<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
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

        p {
            margin: 30px 0 0 30px;
        }
    </style>
</head>

<body>
    <form action="form.php" method="post">
        <table>
            <tr>
                <td>Fname: </td>
                <td><input type="text" name="fname" id="" autocomplete="off" class="form-control" required></td>
            </tr>

            <tr>
                <td>Sname: </td>
                <td><input type="text" name="sname" id="" autocomplete="off" class="form-control" required></td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" id="" autocomplete="off" class="form-control" required></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="pwd" id="" autocomplete="off" class="form-control" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT" name="submit" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_GET["error"])) {
        #Connection Failed
        if ($_GET["error"] == "connection_key_failed") {
            echo "<p>Something went wrong. Please sign in again</p>";
        }

        #Query STMT to database failed
        if ($_GET["error"] == "stmtnotprepared") {
            echo "<p>Something went wrong. Please sign in again</p>";
        }

        #User tried to enter profile page using URL
        if ($_GET["error"] == "notcool") {
            echo "<p>Not cool what you tried to do, NOT COOL!</p>";
        }
    }
    ?>

    <footer>
        <p>Already have an account?<a href="login.php"> Login Here</a></p>
    </footer>
</body>

</html>