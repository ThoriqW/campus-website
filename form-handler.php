<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'thoriqwajedi88@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User name : $name.\n".
			  "User email : $visitor_email.\n".
			  "User subject : $subject.\n".
			  "User message : $message.\n";

$to = 'thoriqwajedi55@gmail.com';

$headers = "From : $email_from \r\n";

$headers .= "Reply-To : $visitor_email \r\n";

mail($to, $email_body, $email_body, $headers);

header("Location : contact.html")


?>