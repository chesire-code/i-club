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


/*
* club_exist()
* @param $club_email
*/

function club_exist($club_email): bool
{
    global $connection_key;
    $club_exists = null;
  $sql = "SELECT * FROM `login_register_system_club`";
  $result = $connection_key->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      if($club_email == $row["club_email"]){
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

function club_sign_up($school_name, $club_email, $club_pass_word, $club_category): bool
{
    global $connection_key;
  $stmt = $connection_key->prepare("INSERT INTO login_register_system_club (`school_name`,`club_email`,`club_pass_word`,`club_category`) VALUES ( ?,?,?,? )");
  $stmt->bind_param("ssss", $school_name, $club_email, $club_pass_word, $club_category);
  $stmt->execute();
    return true;
}


/* club_login()
* @param $club_email, $club_password
*/

function club_login($club_email, $club_pass_word): bool
{
    global $connection_key;
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
         
   
