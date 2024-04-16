<?php

$user_mail = "";

if ($_GET["mail"] != null) {

    $user_mail = $_GET["mail"];
}

$message = check_email($user_mail);

function check_email($user_mail)

{

    if (str_contains($user_mail, "@")  &&  str_contains($user_mail, ".")) {
        return [
            "text" => "prego, puoi entrare!",
            "status" => "alert-success",
        ];
    } elseif (strlen($user_mail) == 0) {
        return [
            "text" => "prego, inserisci una mail",
            "status" => "alert-primary",
        ];
    } else {
        return [

            "text" => "spiacenti, prova con un'altra mail",
            "status" => "alert-danger",
        ];
    };
}
