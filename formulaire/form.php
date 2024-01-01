<?php


$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') 

{
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
            $errors[] = "please enter your firstname";
        if(!isset($_POST['surname']) || trim($_POST['surname']) === '') 
            $errors[] = "please enter your surname";
        if(!isset($_POST['email']) || trim($_POST['email']) === '') {
            $errors[] = "please enter an email address";
          } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "please enter a valid email address";
          }
        if(!isset($_POST['phone']) || trim($_POST['phone']) === '') 
            $errors[] = "please enter your phone number";
         if(!isset($_POST['message']) || trim($_POST['message']) === '') 
            $errors[] = "please enter a message";

        if(empty($errors)) {
            // traitement du formulaire
            // puis redirection
            header('Location: /thanks.php');
        }
}
    
 


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Wild form</title>
</head>
<body>
    <main>
<?php 

      if (count($errors) > 0) : ?>

        <div>

            <ul>

                <?php foreach ($errors as $error) : ?>

                    <li><?= $error ?></li>

                <?php endforeach; ?>

            </ul>

        </div>

<?php endif; ?>
  <form method="post">
  <div>
    <label  for="surname">Surname:</label>
    <input  type="text"  id="surname"  name="surname">
  </div>
  <div>
    <label  for="firstname">First name:</label>
    <input  type="text"  id="name"  name="firstname">
  </div>
  <div>
    <label  for="email">Email :</label>
      <input  type="email"  id="email"  name="email">
  </div>
  <div>
    <label  for="phone">Phone number :</label>
      <input  type="tel"  id="phone"  name="phone">
  </div>
  <div>
    <label  for="subject">Subject :</label>
      <select id="subject"  name="subject">
        <option value="question">Question</option>
        <option value="advice">Advice</option>
        <option value="complaint">Complaint</option>
        <option value="other">Other</option>
</select>
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="message"></textarea>
  </div>
  <div  class="button">
    <button type="submit">Submit your message</button>
  </div>
</form>







