<?php
/*
* User Functions for login and registering
* @author Briomar
* @url https://www.briomar.co.ke
* @license https://wwww.briomar.co.ke/license
*/

/*
* Checks the database connection
* @param $dbName, $serverName, $dbPassword,$dbName, $userTbl
*/
include 'functions.inc.php';

print check_db_connection_user("localhost", "root","","login_register_system_user");

/* db_table_exist()
* @param $db_name, $table_name
*/

function db_table_exist_user($db_name){
  $exists = mysql_query("select * from ".$db_name.");
    if(!($exists !== FALSE)){
      $sql = "
        CREATE TABLE `login_register_system_user` (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            fname VARCHAR(30) NOT NULL,
            sname VARCHAR(30) NOT NULL,
            school_name VARCHAR(50) NOT NULL,
            user_email VARCHAR(30) NOT NULL,
            user_pass_word VARCHAR(30) NOT NULL
        );
     ";
     if($connection_key->query($sql) === TRUE){
      //Successfully created;
     }
    }
    //reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
}
/*
* user_exist()
* @param $user_email
*/
function user_exist($user_email){
  $sql = "SELECT * FROM login_register_system_user";
  $result = $connection_key->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      if($user_email == $row["user_email"]){
        $user_exists = true;
      } else{
        $user_exists = false;
      }
    } 
  }
  return $user_exists;
}
/* user_sign_up()
* @param $fname, $sname, $school_name, $user_email, $user_pass_word
*/
function user_sign_up($fname, $sname, $school_name, $user_email, $user_pass_word){
  $stmt = $connection_key->prepare("INSERT INTO login_register_system_user (`fname`,`sname`,`school_name`,`user_email`,`user_pass_word`) VALUES ( ?,?,?,?,? )");
  $stmt->bind_param(ssss, $fname, $sname, $school_name, $user_email, $user_pass_word);
  $stmt->execute();
  $user_created = true;
  return $user_created;
}
/* user_login()
* @param $user_email, $user_pass_word
*/
function user_login($user_email, $user_pass_word){
  $sql = "SELECT * FROM `login_register_user`";
  $result = $connection_key->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      if($user_email == $row["user_email"] && $user_pass_word == $row["user_pass_word"]){
        $user_exists = true;
      } else{
        $user_exists = false;
      }
    }
  }
  return $user_exists;
}
