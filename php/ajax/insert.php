<?php
require '..' . DIRECTORY_SEPARATOR . 'connection.php';


if (!empty($_POST["nom_prenom"])) {

    extract($_POST);

    $nom = $_POST["nom_prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $genres = $_POST["genre"];
    if ($object->validateEmail($email) == 1) {
        $existe = $object->getConnection()->query("SELECT * FROM users where email ='$email'");
        $existe->execute();
        if ($existe->rowCount() > 0) {
            echo 'existe';
        } 
        else {

            $values = array('email' => $email, 'password' => $password, 'nom_prenom' => $nom, 'telephone' => $telephone, 'genre' => $genres, 'role' => "users");
            if ($object->Insertion("users", $values) == 1) {
                echo 'success';
            } else {
                echo 'faille';
            }
        }
    }
    else{
        echo "invalide";
    }
}
