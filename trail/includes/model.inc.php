<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<?php

class Connection_key extends Access
{
    private $server_name;
    private $user_name;
    private $password;
    private $database_name;
    private $connection_key;
    private $connection_command;



    #Insert
    function connection_key_activate($server_name, $user_name, $password, $database_name)
    {
        $this->server_name = $server_name;
        $this->user_name = $user_name;
        $this->password = $password;
        $this->database_name = $database_name;
        $this->connection_command = new mysqli($this->server_name, $this->user_name, $this->password, $this->database_name);
        $this->connection_key = $this->connection_command;



        if ($this->connection_command->connect_error) {
            header("location:./signup.php?error=connection_key_failed");
            die("Connection Failed");
            exit();
        } else {
            /*
            $_POST[$this->fname];
            $_POST[$this->sname];
            $_POST[$this->email];
            $_POST[$this->pwd];
            $_POST[$this->submit];
            */
            $fname_insert = $_POST[$this->fname];
            $sname_insert = $_POST[$this->sname];
            $email_insert = $_POST[$this->email];
            $pwd_insert = $_POST[$this->pwd];
            $submit_insert = $_POST[$this->submit];

            if (isset($submit_insert)) {
                #Is email and pass present in db
                $sql = "SELECT * FROM class WHERE email = ?";
                $stmt = mysqli_stmt_init($this->connection_key);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location:./signup.php?error=connection_key_failed");
                    die();
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $email_insert);
                    mysqli_stmt_execute($stmt);

                    $result_data = mysqli_stmt_get_result($stmt);

                    if ($row = mysqli_fetch_assoc($result_data)) {
                        $email_db = $row["email"];


                        if ($email_db == $email_insert) {
                            #They match. Direct to login page
                            header("location: ./login.php?error=emailexist");
                            die();
                            exit();
                        }
                    } else {
                        #They do not match. Insert into DB
                        echo "NO match";
                        $sql_insert = "INSERT INTO `class`(`fname`,`sname`,`email`,`pwd`) VALUES(?,?,?,?)";
                        $stmt_insert = mysqli_stmt_init($this->connection_key);

                        if (!mysqli_stmt_prepare($stmt_insert, $sql_insert)) {
                            header("location:./signup.php?error=connection_key_failed");
                            die();
                            exit();
                        } else {
                            $pwd_hashed = password_hash($pwd_insert, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt_insert, "ssss", $fname_insert, $sname_insert, $email_insert, $pwd_hashed);
                            mysqli_stmt_execute($stmt_insert);
                            mysqli_stmt_close($stmt_insert);
                            session_start();
                            $_SESSION["user_name"] = $fname_insert;
                            mysqli_stmt_close($stmt);
                            header("location: account/profile.php?error=noneloggedin");
                            die();
                            exit();
                        }
                    }
                }




                /*
                $sql = "INSERT INTO `class`(`fname`,`sname`,`email`) VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($this->connection_key); 
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    #Redirect back
                    header("location:./?error");
                    exit();
                } else{                
                    mysqli_stmt_bind_param($stmt, "sss", $fname_insert, $sname_insert, $email_insert);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    header("location:./?error=none");
                    exit();
                }
                */
            } else {
                #User cannot enter logedin page through the URL
                header("location : ./signup.php?error=notcool");
                die();
                exit();
            }
        }
    }
}
