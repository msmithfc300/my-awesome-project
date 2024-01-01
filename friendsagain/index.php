<?php

require_once '_connec.php';


$pdo = new \PDO(DSN, USER, PASS);


if (isset($_POST['fname']) && isset($_POST['lname'])) {

      $prepareQuery = "INSERT INTO friend (firstname, lastname) VALUES (:fname, :lname);";

    $stmt = $pdo->prepare($prepareQuery);

    $stmt->bindValue(":fname", $_POST['fname'], PDO::PARAM_STR);
    $stmt->bindValue(":lname", $_POST['lname'], PDO::PARAM_STR);

   $success = $stmt->execute();
   header("location: /index.php");

}


$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
</head>
<body>
    <h1>I'll be there for you...</h1>
    <?php
    if (empty($friends)) {
        echo "<div>";
        echo "<p>You are a Billy no mates!</p>";
        echo "</div>";
    }
else {
    foreach($friends as $row) {
        echo "<div>";
        echo "<p>" . htmlspecialchars($row["firstname"]) . " " . htmlspecialchars($row["lastname"]) . "</p>";     
        echo "</div>";
    }
}

?>

    <form method="post">
    <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" maxlength="45" required><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" maxlength="45" required>
  <br><br>
  <input type="submit" value="Submit">

    </form>




