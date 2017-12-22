<?php

$to = '25300@ma-web.nl';
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'Uw bericht is verzonden';
