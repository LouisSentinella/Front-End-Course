<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$messagecontent = $_POST['message'];
if(isset( $_POST['email-sub']))
$emailsub = $_POST['email-sub'];
if(isset( $_POST['contact-pref']))
$contactpref = $_POST['contact-pref'];
if(isset( $_POST['county']))
$county = $_POST['county'];


$content="From: $name\r\n Message: $messagecontent\r\n Sub to email: $emailsub\r\n Contact pref: $contactpref\r\n County: $county\r\n ";
$recipient = getenv('CONTACT_EMAIL');
if (!$recipient) {
    http_response_code(500);
    exit('Contact form is not configured.');
}
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>