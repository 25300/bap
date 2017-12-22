<?php

$to = '25300@ma-web.nl';
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to, $subject, $message);

echo 'Uw bericht is verzonden';