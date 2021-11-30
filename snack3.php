<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 

$arr = [];
$max = 15;

while (count($arr) < $max) {
    $num  = rand(1, 100);

    if (!in_array($num, $arr)){
        $arr[] = $num;
    }
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
    <span>15 numeri casuali:</span>
    <ul>
        <?php 
            for ($i=0; $i < count($arr); $i++) { 
                echo "<li> $arr[$i] </li>";
            }
        
        ?>
    </ul>
</body>
</html>