<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<?php

trait Database_connection_key
{
    private $server_name;
    private $user_name;
    private $password;
    private $database_name;
    private $connection_command;
    private $connection_key;

    function __construct($server_name, $user_name, $password, $database_name)
    {
        $this->server_name = $server_name;
        $this->user_name = $user_name;
        $this->password = $password;
        $this->database_name = $database_name;
        $this->connection_command = new mysqli($this->server_name, $this->user_name, $this->password, $this->database_name);
        $this->connection_key = $this->connection_command;
    }
}

class Reveal
{

    use Database_connection_key;
    function __destruct()
    {
        if ($this->connection_command->connect_error) {
            header("location:./signup.php?error=connection_key_failed");
            die("Connection Failed");
            exit();
        } else {
            $sql = "SELECT * FROM class WHERE  email = ? OR pwd = ?";
            $stmt = mysqli_stmt_init($this->connection_key);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die("Connection Failed");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $_POST["email"], $_POST["password"]);
                mysqli_stmt_execute($stmt);
                $result_data = mysqli_stmt_get_result($stmt);


                if ($row = mysqli_fetch_assoc($result_data)) {
                    $email_db = $row["email"];
                    $pwd_db = $row["pwd"];
                    $user_name_db = $row["fname"];
                    if ($email_db == $_POST["email"]) {
                        #Check password
                        $check_password = password_verify($_POST["password"], $pwd_db);
                        if ($check_password === false) {
                            #error=passwordfalse
                            header("location: ./login.php?error=wrongpassword");
                        } else {
                            #error=nonepasswordmatch
                            session_start();
                            $_SESSION["user_name"] = $user_name_db;
                            mysqli_stmt_close($stmt);
                            header("location: account/profile.php?error=noneloggedin");
                            die();
                            exit();
                        }
                    }
                } else {
                    mysqli_stmt_close($stmt);
                    header("location: login.php?error=doesnotexist");
                    die();
                    exit();
                }
            }
        }
    }
}

#When user is signing up for the first time ensure he does not repeat a fname, sname or email that exists in the database. Use the below function to check if what the user submitted is unique before posting it into the database
/*
            $sql = "SELECT * FROM class WHERE email = ?";
            $stmt = mysqli_stmt_init($this->connection_key);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die("Connection Failed");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $_POST["email"]);
                mysqli_stmt_execute($stmt);
                $result_data = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result_data)) {
                    $email_db = $row["email"];
                    $user_name_db = $row["fname"];
                    if ($email_db == $_POST["email"]) {
                        session_start();
                        $_SESSION["user_name"] = $user_name_db;
                        mysqli_stmt_close($stmt);
                        header("location: account/profile.php?error=noneloggedin");
                        die();
                        exit();
                    }
                } else {
                    mysqli_stmt_close($stmt);
                    header("location: login.php?error=doesnotexist");
                    die();
                    exit();
                }
*/