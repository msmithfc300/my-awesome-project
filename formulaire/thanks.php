
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<p>Merci <?php echo $_POST['firstname'] . ' ' . $_POST['surname'] ; ?> de nous avoir contacté à propos de <?php echo $_POST['subject']; ?>.

Un de nos conseillers vous contactera soit à <?php echo $_POST['email']; ?> ou par téléphone au <?php echo $_POST['phone']; ?> dans les plus brefs délais pour traiter votre demande : 

<?php echo $_POST['message']; ?></p>