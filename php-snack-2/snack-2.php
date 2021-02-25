<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

    if(empty($name) || empty($email) || empty($age)){
        $mex= 'Attenzione stai lasciando i campi vuoti';
    } elseif(strlen($name) > 3 && strpos($email, '@') && strpos($email, ".") && is_numeric($age)){
        $mex= "Accesso riuscito";
    } else {
        $mex= "Accesso negato";
    }
?>

<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snack 1; PHP snack 2</title>
</head>
<body>
    <p>
        <strong>Nome:</strong> 
        <?php echo $name; ?>
    </p>

    <p>
        <strong>Et&agrave;:</strong>  
        <?php echo $age; ?>
    </p>

    <p>
    <strong>E-mail:</strong>  
        <?php echo $email; ?>
    </p>

    <h2>
        <?php echo $mex ?>
    </h2>

</body>
</html>