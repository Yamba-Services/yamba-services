<?php

require '..' . DIRECTORY_SEPARATOR . 'connection.php';
session_start();
if (!empty($_POST["email"])) {
    extract($_POST);

    $email = $_POST["email"];
    $password = $_POST["password"];

    $existe = $object->getConnection()->query("SELECT * FROM users WHERE email = '$email'");
    $existe->execute();
    if ($existe->rowCount() > 0) {
        $exis = $existe->fetch();
        if (password_verify($password, $exis["password"])) {
            $_SESSION["email"] =  $email;
            $_SESSION["password"] = $password;
            if ($exis["role"]=="users") {
               echo "users";
            }
            if ($exis["role"]=="admin") {
                echo "admin";
             }
             if ($exis["role"]=="supervisor") {
                echo "supervisor";
             }
             if ($exis["role"]=="agent") {
                echo "agent";
             }
        } else {
            echo 'false';
        }
    } else {
        echo 'faille';
    }
}

elseif (!empty($_POST["emaily"])){
    $emails = $_POST["emaily"];
    if($object->validateEmail($emails)==1){
       if($object->Verify("users","email", $emails)==1){
        $_SESSION["forgot"]= $emails ;
        echo "vraie";
       }
       else {
        echo "faux";
       }
    }
    else {
        echo "mal";
    }
}

elseif (!empty($_POST["mails"])) {
    $emails = $_POST["mails"];
    if($object->validateEmail($emails)==1){
       echo "true";
     }
     else{
        echo "mail invalide";
     }
}
