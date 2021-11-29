<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = intval($_GET["age"]);

if(str_contains($email, '@')){
    $userAndDomain = explode('@', $email);
    $domain = end($userAndDomain);
};

$ok = false;
if (strlen(trim($name)) > 3 && (str_contains($domain, '.')) && (!empty($age) && is_int($age))){
    $ok = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <?php if ($ok) {
            echo "<h1 style = 'color: green;'>Accesso riuscito </h1>";
        } else {
            echo "<h1 style = 'color: red;'>Accesso negato </h1>";
        } ?>
    </div>
</body>
</html>

