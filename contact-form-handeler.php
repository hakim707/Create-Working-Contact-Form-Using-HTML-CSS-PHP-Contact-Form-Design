<?php
$name = $_POST['name']

$vistor_email = $_POST['email']

$message = $_POST['message']


$email_form = 'roziyev_99@mail.ru';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Message: $message.\n";








$to = "roziyev_99@mail.ru";

$headers = "From: @email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Locatin: index.html");

?>