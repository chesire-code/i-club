<?php
/*
* @author : Briomar
* website : https://briomar.co.ke
* contact : kapolonbraine@briomar.co.ke
*/

function check_db_connection($server_name, $user_name,$pass_word, $db_name){
    $connection_key = new mysqli($server_name, $user_name,$pass_word, $db_name);
    # Check Connection
    if ($connection_key->connect_error) {
        $connection_error = true;
        $connection_key_error = $connection_key->connect_error;
    } else{
        $connection_error = "false";
    }
    return $connection_error;
}

function check_server_request_method(){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server_safe = true;
  } else{
    $server_safe = false;
  }
}

function input_empty($input){
  if(empty($input)){
    $empty_input = true;
    $empty_input_message = "Fill in the inputs";
  } else {
    $empty_input = false;
  }
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  //$data = mysqli_escape_string($connection_key,$data);
}

function pregMatch($data){
  if(!preg_match("/^[a-zA-Z-']*&/",$data)){
    $error_pregMatch = true;
    $error_pregMatchMessage = "Only letters and whitespace allowed";
  } else{
    $error_pregMatch = false;
  }
}

function filter_email($data){
  //For emails only
  if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    $error_filter_email = true;
    $error_filter_email_message = "Invalid emailn format";
  } else{
    $error_filter_email = false;
  }
}

function encrypt_data($data){
  $data = md5($data);
  //$data = password_hash($data, PASSWORD_HASH);
  //For passwords only
}
