<?php

$user_mail = $_GET["mail"];

$message = check_email($user_mail);

function check_email($user_mail)

{

    if (str_contains($user_mail, "@")  &&  str_contains($user_mail, ".")) {

        $message = "prego, puoi entrare!";
    } elseif (mb_strlen($user_mail) == 0) {
        $message = "prego, inserisci una mail";
    } else {
        $message = "spiacenti, prova con un'altra mail";
    }


    return $message;
}


?>