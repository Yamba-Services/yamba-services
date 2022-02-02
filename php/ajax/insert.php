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

else if (!empty($_POST["nom"])) {

    extract($_POST);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $numero = $_POST["numero"];
    $function = $_POST["function"];
    $genre = $_POST["genre"];
    $jours = $_POST["jours"];
    $mois = $_POST["mois"];
    $anne = $_POST["anne"];
    $liens = $_POST["liens"];
    $societe = $_POST["societe"];
    $ville = $_POST["ville"];

    if ($object->validatePhone($numero) == 1) {
        $existe = $object->getConnection()->query("SELECT * FROM clients where client_number ='$number "." $number'");
        $existe->execute();
        if ($existe->rowCount() > 0) {
            echo 'existe';
        } 
        else {

            $values = array('client_name' => $nom ." ".$prenom , 'client_number' => $number . $numero, 'client_email' => $email,
            'clients_city' => $ville, 'clients_gender' => $genre, 'clients_function' => $function,
            'clients_birthdays' => $jours."-".$mois."-".$anne, 'join_link' => $liens, 'clients_entreprise' => $societe,'date_inscription' =>  date('Y-m-d H:i:s'));
            if ($object->Insertion("clients", $values) == 1) {
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
