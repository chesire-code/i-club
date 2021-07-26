<?php
# @author : Briomar
# contact : kapolonbraine@briomar.co.ke
# website : https://briomar.co.ke
?>
<?php

#control.inc.php -> Get's user's data.

class Access
{
    public $fname;
    public $sname;
    public $email;
    public $pwd;
    public $submit;

    public function __construct($fname, $sname, $email, $pwd, $submit)
    {
        $this->fname = $fname;
        $this->sname = $sname;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->submit = $submit;
    }
}
