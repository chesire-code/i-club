<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <td>Email: </td>
                <td><input type="email" name="email" id="" autocomplete="off" class="form-control" required></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" id="" class="form-control" required></td>
            </tr>

            <tr>
                <td><input type="submit" value="SUBMIT" name="submit2" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <!-- 
    <footer>
        <p>Don't have an account?<a href="signup.php"> Sign Up Here</a></p>
    </footer>
    -->
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
</body>

</html>