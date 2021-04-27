<?php
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$customer_email=$_POST['email'];
$message=$_POST['message'];

$email_from='vidhulaaaj@gmail.com';
$email_subject ='restaurant customer query';
$email_body = "User name : $firstname.$lastname. \n". 
               "User Email : $customer_email.\n". 
               "Customer Query/Message : $message.\n";

$to ="vidhulajsekar@gmail.com";
$headers = "From : $email_from \r\n";
$headers = "Reply to : $customer_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("contact.html");






?>