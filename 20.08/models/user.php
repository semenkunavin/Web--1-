<?php
include_once ("models/user.php");
function validate ($login, $psw = 'string') {
    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
        echo ("E-mail адрес '$login' указан верно.\n");
    } else {
        echo ("E-mail адрес '$login' указан неверно.\n");
    }


    if ($psw < 6) {
        echo "В пароле мало символов";
    }
    else
        echo "Пароль принят";
}
