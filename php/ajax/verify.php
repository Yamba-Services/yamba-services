<?php 

require '..'.DIRECTORY_SEPARATOR.'connection.php';

if(!empty($_POST["email"])){
    extract($_POST);

    $email = $_POST["email"];
    $password = $_POST["password"];

$existe = $object->getConnection()->query("SELECT * FROM users WHERE email = '$email'");
$existe->execute();
if($existe->rowCount() >0){


$exis = $existe->fetch();
foreach($exis as $verifi){
    if(password_verify($password, $verifi["password"])){
        echo 'true';
    }else{
        echo 'false';
    }
}

}
else{
    echo 'faille';
}

}




?>