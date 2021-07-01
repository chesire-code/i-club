<?php 
/*
* @author : Briomar
* Contact : kapolonbraine@briomar.co.ke
* Website : https://briomar.co.ke
*/
trait input_validation{
  public function error($message){
    #echo "error_no".$message
    #exit
    /*
    * ###ERROR NUMBER###
    * 1. Invalid username
    * 2. Invalid email
    * 3. Invalid password
    */
  }
  /* Input validation */
  public function user_name_validate($user_name_validate){
    (!preg_match("/^[a-zA-Z-0-9' ]*$/",$user_name_validate) ? error(1) : 0;
     $user_name_validate = htmlspecialchars($user_name_validate);
     $user_name_validate = trim($user_name_validate);
     $user_name_validate = stripslashes($user_name_validate);
     return $user_name_validate;
  }
  
  public function email_validate($email_address_validate){
    (!filter_var($email_address_validate, FILTER_VALIDATE_EMAIL)) ? error(2) : 0;
  }
}
class Users{
  /*EXTRAS*/
  protected $user_name;
  protected $email_address;
  protected $password;
  /*EXTRAS END*/
  use input_validation;
  #$_SERVER["REQUEST_METHOD"] == "POST"
  protected function __construct($user_name, $email_address, $password){
    /* Get inputs */
    $this->user_name = $_POST[$username];
    $this->email_address =  $_POST[$email_address];
    $this->password =  $_POST[$password];
    /*INPUT VALIDATION*/
    /*1. username */
    
  }
}
/*
$obj = new Welcome();
$obj->msg1();
*/
