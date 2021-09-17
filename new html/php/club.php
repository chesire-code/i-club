<?php
/*
* Club Functions for login and registering
* @author Briomar
* @url https://www.briomar.co.ke
* @license https://wwww.briomar.co.ke/license
*/

/*
* Checks the database connection
* @param $dbName, $serverName, $dbPassword,$dbName, $userTbl
*/
include 'functions.inc.php';

print check_db_connection("localhost", "root","","login_register_system_club");

/* db_table_exist()
* @param $db_name, $table_name
*/

function db_table_exist($db_name, $table_name){
  $exists = mysql_query("select * from ".$db_name.");
    if(!($exists !== FALSE)){
      $sql = "
        CREATE TABLE `login_register_system_club` (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            school_name VARCHAR(30) NOT NULL,
            club_email VARCHAR(30) NOT NULL,
            club_password VARCHAR(50) NOT NULL,
            club_category VARCHAR(30) NOT NULL
        );
     ";
     if($connection_key->query($sql) === TRUE){
      //Successfully created;
     }
    }
    //reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
}

/*
* club_exist()
* @param $club_email
*/

function club_exist($club_email){
  $sql = "SELECT * FROM login_register_system_club";
  $result = $connection_key->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      if($club_email == $row["email"]){
        $club_exists = true;
      } else{
        $club_exists = false;
      }
    } 
  }
  return $club_exists;
}

/* club_sign_up()
* @param $club_category, $school_name, $club_email, $club_pass_word
*/

function club_sign_up($school_name, $club_email, $club_pass_word, $club_category){
  $stmt = $connection_key->prepare("INSERT INTO login_register_system_club (`school_name`,`club_email`,`club_pass_word`,`club_category`) VALUES ( ?,?,?,? )");
  $stmt->bind_param(ssss, $school_name, $club_email, $club_pass_word, $club_category);
  $stmt->execute();
  $club_created = true;
  return $club_created;
}


/* club_login()
* @param $club_email, $club_password
*/

function club_login($club_email, $club_pass_word){
  $sql = "SELECT * FROM `login_register_club`";
  $result = $connection_key->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      if($club_email == $row["club_email"] && $club_pass_word == $row["club_pass_word"]){
        $club_exists = true;
      } else{
        $club_exists = false;
      }
    }
  }
  return $club_exists;
}
         
   
