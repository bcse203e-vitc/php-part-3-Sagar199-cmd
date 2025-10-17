<?php
$to = "example@domain.com";
$sub = "Contact Form Message";
$msg = "This is a test message.";
$headers = "From: user@domain.com";
mail($to, $sub, $msg, $headers);
echo "Mail Sent!";
?>
