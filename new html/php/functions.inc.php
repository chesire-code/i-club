<?php
/*
* @author : Briomar
* website : https://briomar.co.ke
* contact : kapolonbraine@briomar.co.ke
*/
global $connection_key;
function check_db_connection($server_name, $user_name,$pass_word, $db_name): bool
{
    $connection_key = new mysqli($server_name, $user_name,$pass_word, $db_name);
    # Check Connection
    if ($connection_key->connect_error) {
        $connection_error = true;
        $connection_key_error = $connection_key->connect_error;
    } else{
        $connection_error = false;
    }
    return $connection_error;
}

function check_server_request_method(): bool
{
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server_safe = true;
  } else{
    $server_safe = false;
  }
  return $server_safe;
}

function input_empty($input): bool
{
  if(empty($input)){
    $empty_input = true;
  } else {
    $empty_input = false;
  }
  return $empty_input;
}

function test_input($data): string
{
  $data = trim($data);
  $data = stripslashes($data);
  return htmlspecialchars($data);
}

function pregMatch($data){
  if(!preg_match("/^[a-zA-Z-']*&/",$data)){
    $error_pregMatch = true;
  } else{
    $error_pregMatch = false;
  }
  return $data;
}

function filter_email($data){
  //For emails only
  if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    $error_filter_email = true;
    $error_filter_email_message = "Invalid email format";
  } else{
    $error_filter_email = false;
  }
  return $data;
}

function encrypt_data($data): string
{
    //$data = password_hash($data, PASSWORD_HASH);
  //For passwords only
    return md5($data);
}
