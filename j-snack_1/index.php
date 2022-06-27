<?php
/*Snack 1 (visto a lezione)
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

// partita 1
$arr_partite = [
[
    [
            'nome'  => 'Olimpia Milano',
            'di_casa'   => true,
            'punteggio' => 55
        ],
        [
            'nome'  => 'Leakers',
            'di_casa'   => false,
            'punteggio' => 60
        ],
    ],

    [
        [
            'nome'  => 'Miami Heat',
            'di_casa'   => true,
            'punteggio' => 74
        ],
        [
            'nome'  => 'Catanzaro',
            'di_casa'   => false,
            'punteggio' => 82
        ],
    ],

    [
        [
            'nome'  => 'Redibibbia',
            'di_casa'   => true,
            'punteggio' => 80
        ],
        [
            'nome'  => 'Neapolis',
            'di_casa'   => false,
            'punteggio' => 60
        ],
    ],
    [
        [
            'nome'  => 'Bulls',
            'di_casa'   => true,
            'punteggio' => 90
        ],
        [
            'nome'  => 'Torino',
            'di_casa'   => false,
            'punteggio' => 86
        ],
    ],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squadre php</title>
</head>
<body>

<?php 

    $arr_length = count($arr_partite);
    for ($_i=0; $_i < $arr_length ; $_i++) { 
        $partita = $arr_partite[$_i];
        echo "<div>{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}</dic>";
    } ?>
</body>
</html>