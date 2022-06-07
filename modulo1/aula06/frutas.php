<?php

    $frutas =[
        'laranja', // 0
        'banana', //1
        'abacaxi', //2
    ];

// adicionando nova fruta no array
$frutas[] = 'maçã'; //3

$frutas[10] = 'melancia';

$frutas[7] = 'morango';

$frutas[] = 'tangerina';

//var_dump($frutas);

?>

<ul>
    <li><?php echo $frutas[0]; ?></li>
    <li><?php echo $frutas[1]; ?></li>
    <li><?php echo $frutas[2]; ?></li>
</ul>