<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$colorst = $_POST['colors'];
$message= $_POST['message'];



$email_from ='info@blessingfriday998@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "Úser Name: $name.\n".
              "Úser Email: $visitor_email.\n".
              "colors: $colors.\n".
              "Úser Message: $message.\n";



$to ='blessingfriday998@gmail.com';
$headers= "from: $email_from \r\n";
$headers. = "Reply-To: $visitor_email \r\n ";

mail($to,$email_colors,$email_body,$headers);

header("Location: contact.html");



?>