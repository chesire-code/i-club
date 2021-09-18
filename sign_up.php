<?php

/*
* @author : Briomar
* website : https://briomar.co.ke
* contact : kapolonbraine@briomar.co.ke
*/


include "php";
//Club Sign Up
$club_submit_button = $_POST["club_sign_up_submit"];
if(isset($club_submit_button)){
    $school_name = $_POST["school_name"];
    $club_name = $_POST["club_name"];
    $club_category = $_POST["club_category"];
    $club_email = $_POST["club_email"];
    $club_pass_word = $_POST["club_pass_word"];
    #redirect
    function redirect($header,$message){
        Header("header:".$header."?".$message);
    }
    #functions.inc.php
    if(!check_db_connection("localhost","root","","login_register_system_club")){
        redirect("home page.html","db-connection-error");
    }
    if(!check_server_request_method() == true){
        redirect("home page.html","invalid-server-request-method");
    }

    if(input_empty($school_name) == true || input_empty($club_name) == true || input_empty($club_email) == true || input_empty($club_pass_word) == true || input_empty($club_category) == true ){
        redirect("home page.html","empty-inputs");
    }

    $school_name = test_input($school_name);
    $school_name = pregMatch($school_name);

    $club_name = test_input($club_name);
    $club_name = pregMatch($club_name);

    $club_category = test_input($club_category);
    $club_category = pregMatch($club_category);

    $club_email = test_input($club_email);
    $club_email = filter_email($club_email);

    $club_pass_word = test_input($club_pass_word);
    $club_pass_word = encrypt_data($club_pass_word);

    #Db Interaction
    if(club_exist($club_email) == true){
        Header("header: home page.html?club-exists");
    };
    if(club_sign_up($school_name, $club_email, $club_pass_word, $club_category) == true){
        $club_signed_up = true;
        Header("header: home page.html?club-created");
    };
}

//Club Sign In
if(isset())
