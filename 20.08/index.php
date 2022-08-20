<?php

IF (count($_POST) > 0) {
    include_once ("models/user.php");
    var_dump($_POST);

    validate($_POST['login'], $_POST['psw']);
}

include_once ("views/form.php");



    
