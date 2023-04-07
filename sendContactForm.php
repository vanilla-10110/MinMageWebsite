<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Build the email message
$to = 'vanilla@minmage.games';
$subject = 'New message from your website';
$body = "Name: $name\nEmail: $email\n\n$message";

// Send the email
mail($to, $subject, $body);

// Redirect the user to a thank-you page
header('Location: /thankYou.htm');
exit();
?>
