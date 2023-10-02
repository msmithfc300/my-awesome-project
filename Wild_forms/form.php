<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Wild form</title>
</head>
<body>
    <main>
  <form action="thanks.php" method="post">
  <div>
    <label  for="surname">Surname:</label>
    <input  type="text"  id="surname"  name="user_surname">
  </div>
  <div>
    <label  for="firstname">First name:</label>
    <input  type="text"  id="name"  name="user_name">
  </div>
  <div>
    <label  for="email">Email :</label>
      <input  type="email"  id="email"  name="user_email">
  </div>
  <div>
    <label  for="phone">Phone number :</label>
      <input  type="tel"  id="phone"  name="user_tel">
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
    <textarea  id="message"  name="user_message"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Submit your message</button>
  </div>
</form>






