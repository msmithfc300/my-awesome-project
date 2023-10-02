<?php

$surname = $_POST['user_surname'];
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$number = $_POST['user_tel'];
$subject = $_POST['subject'];
$message = $_POST['user_message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-light border rounded p-5">
       <p>Thank you <?= $name ?> <?= $surname ?> for contacting us about " <?= $subject ?> "
           One of our advisors will contact you either at <?= $email ?> or by phone on <?= $number ?>
           as soon as possible regarding your query: <?= $message ?> </p>
    </div>
</body>
</html>