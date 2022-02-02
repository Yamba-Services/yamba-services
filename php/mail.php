<?
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST5['subject'];
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."

";

mail ("name@youremail.com" , "New Message", $email_message);

?>

