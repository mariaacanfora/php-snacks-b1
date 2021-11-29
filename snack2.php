<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$postsList = [
    "26-08-2021" => [
        [
            "author" => "Michael",
            "text" => "Text post 1",
            "hour" => "2:12"
        ],

        [
            "author" => "Michael",
            "text" => "Text post 2",
            "hour" => "10:41"
        ]
    ],

    "30-08-2021" => [
        [
            "author" => "Michael",
            "text" => "Text post 1",
            "hour" => "1:59"
        ],
    ],

    "15-09-2021" => [
        [
            "author" => "Michael",
            "text" => "Text post 1",
            "hour" => "00:31"
        ],

        [
            "author" => "Michael",
            "text" => "Text post 2",
            "hour" => "2:07"
        ],

        [
            "author" => "Michael",
            "text" => "Text post 2",
            "hour" => "22:40"
        ],
        
    ],


    "24-09-2021" => [
        [
            "author" => "Michael",
            "text" => "Text post 1",
            "hour" => "7:57"
        ],        
    ],




];

echo "<pre>";
var_dump($postsList["26-08-2021"]);
echo "</pre>";


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
        <ul>
            <?php 
                for ($i=0; $i < count($postsList); $i++) { 
                    $post = $postsList[$i];
                    echo "<li> $post </li>";
                }
            
            
            ?>
        </ul>

    </div>
</body>
</html>