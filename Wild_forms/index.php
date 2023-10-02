<?php 
echo 'Thank you ' . htmlspecialchars($_POST["user_name"]) . " " . htmlspecialchars($_POST["user_surname"]) . ' for contacting us about "' . htmlspecialchars($_POST["subject"]) .  '".';

echo '<br/>';

echo 'One of our advisors will contact you either at ' . htmlspecialchars($_POST["user_email"]) .  ' or by phone on ' .  htmlspecialchars($_POST["user_tel"]) .  ' as soon as possible about your message: '; 

echo '<br/>';
echo '<br/>';

echo htmlspecialchars($_POST["user_message"]);
?>