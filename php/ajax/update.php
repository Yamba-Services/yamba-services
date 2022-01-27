<?php 
require '..'.DIRECTORY_SEPARATOR.'connection.php';
// modif forgot password
if (!empty($_POST["mail"])) {
    $email = $_POST['mail'];
    $passwords = password_hash($_POST['passwords'],PASSWORD_DEFAULT) ;


    $valider= "UPDATE users SET password = '$passwords'
        WHERE id_users = '$email'";
        $val = $object->getConnection()->prepare($valider);
        $val->execute();
        $vala= $val->execute();

        if ($vala == true) {
          echo "Success";
         

        }
        else {
        echo 'failled';
        }
      }