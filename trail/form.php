<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<?php

if (isset($_POST["submit"])) {
    require("includes/control.inc.php"); #Deals with revealing DB data to user
    require("includes/model.inc.php"); #Deals with DB

    #model.inc.php
    $connection_key = new Connection_key("fname", "sname", "email", "pwd", "submit");
    $connection_key->connection_key_activate("localhost", "root", "", "phpproject1");
}

#viewer.inc.php
if (isset($_POST["submit2"])) {
    require("includes/viewer.inc.php"); #Deals with user input

    $reveal = new Reveal("localhost", "root", "", "phpproject1");
}
