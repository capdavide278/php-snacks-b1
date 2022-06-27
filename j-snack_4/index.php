<?php

    /*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/

    $arr_casuali = [];
    while (count($arr_casuali) < 15) {
        $numero = rand(0, 100);
        if (!in_array($numero, $arr_casuali)) {
            $arr_casuali[] = $numero;
        }
    };
    for ($i = 0; $i < count($arr_casuali); $i++) {
        echo "<div>{$arr_casuali[$i]}</div>";
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeri randomici php</title>
</head>
<body>

</body>
</html>