<?php

/*
* @author : Briomar
* website : https://briomar.co.ke
* contact : kapolonbraine@briomar.co.ke
*/

function check_db_connection($server_name, $user_name, $pass_word_db, $db_name){
  #Create connection
  $connection_key = new mysqli($server_name, $user_name, $pass_word_db, $db_name);
  #Check connection
  if($connection_key->connect_error){
    $connection_key_error = $connection_key->connect_error;
  }
}

  
