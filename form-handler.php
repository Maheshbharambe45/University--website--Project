<?php
$name= $_POST['name'];
$Visitor_email= $_POST['email'];
$subject= $_POST['Subject'];
$message= $_POST['message'];

$email_form = 'bharambemahesh7@gmail.com';

$email_subject = 'New form submission';

$email_body ="user_name: $name.\n".
            "user_email:$Visitor_email.\n".
            "subject:$subject.\n".
            "user_message:$message.\n";

$to='bharambemahesh7@gmail.com';

$headers = "From :$email_form \r\n";
$headers .= "Reply-To:$Visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
?>