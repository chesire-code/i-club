<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<?php

if (isset($_POST["logout"])) {
    session_start();
    session_destroy();

    header("location: ../index.php");
} else {
    header("location: profile.php?error=notcool");
}
