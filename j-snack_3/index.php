<?php

/*Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Leondardo Da Vinci',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Leondardo Da Vinci',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Leondardo Da Vinci',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Leondardo Da Vinci',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Leondardo Da Vinci',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Leondardo Da Vinci',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post php</title>
</head>
<body>

    <?php 
    $keys = array_keys($posts);
    for ($i=0; $i < count($posts); $i++) { 
        $post = $posts[$keys[$i]];
        echo "<div> {$keys[$i]} </div>";
        
        for ($j=0; $j < count($post) ; $j++) { 
            
            $page = $post[$j];
            echo "<div> {$page['author']} <br> {$page['title']}</div>";
            echo "<div> {$page['text']} <br> <br></div>";
        }
    }
    ?>
</body>
</html>