<?php
$first_name = $_POST('first_name');
$last_name = $_POST('last_name');
$email = $_POST('email');
$comments = $_POST('comments');

$to = "vanice@theaulait.me";
$subject = "New Message from Backpack Traveling";

mail ($to, $subject, $comments, "From: " . $first_name . $last_name);
echo "Your message has been received.";
header('Location: bptContact.html');
exit;

?>
