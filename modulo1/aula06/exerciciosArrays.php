
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

$quantidade = max($frutas);
$numeroEndereco = 0;

echo $quantidade . " " . $numeroEndereco;

for ($frutas[$numeroEndereco]; $numeroEndereco <= $quantidade; $numeroEndereco++){

              echo "<ul><li>{$frutas[$numeroEndereco]}</li></ul>";

        }
