<?php
/*Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/

    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $mail = isset($_GET['mail']) ? $_GET['mail'] : '';
    $age = $_GET['age'] ?? '';//scorciatoia

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check email</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" id="name" placeholder="inserisci nome">
        <input type="text" name="mail" id="mail" placeholder="inserisce mail">
        <input type="text" name="age" id="age" placeholder="inserisci età">
        <button>invio</button>
    </form>

    <?php 

        if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
            echo 'accesso riuscito';
        } else {
            echo 'accesso negato';
        };


    ?>
</body>
</html>

