<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <!-- font -->
    <link rel="stylesheet" href="http://localhost/briomar__framework/font/font.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/CSS%20frameworks/Bootstrap/Bootstrap%204.5.2/bootstrap-4.5.2-dist/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <script src="http://localhost/CSS%20frameworks/Bootstrap/jquery/jQuery.js"></script>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-image: radial-gradient(white, dodgerblue);
        }

        .container {
            margin: 10px 0;
            border: 5px solid dodgerblue;
            border-radius: 5px;
            background-color: dodgerblue;
        }

        .container header {
            margin: 10px 0;
            width: fit-content;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 5px;
            letter-spacing: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            cursor: pointer;
        }

        .container p {
            color: white !important;
        }

        .container a {
            color: orangered;
            font-weight: 600;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- 
        <a href="signup.php">Sign Up</a> <br>
    <a href="login.php">Log In</a>
     -->
    <div class="container">
        <header>Why Sign Up?</header>
        <p>Signing up introduces you to more content offfered by our site, you get to experience cool fetures of our website. Signing Up also helps enables you to get 50% off all our paid items. We also have a surprise waiting for you... Sign up today!!</p>
        <a href="signup.php">Sign Up </a> <br>
        <a href="login.php">Login </a>
    </div>

    <script>
        $(document).ready(function() {
            $("header").click(function() {
                $("p").toggle(500);
            });
        });
    </script>
</body>

</html>