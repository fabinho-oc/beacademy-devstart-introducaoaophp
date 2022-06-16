<?php

$frutas = [
    'banana',
    'Tangerina',
    'abacate',
    'Jaca',

];

foreach($frutas as $posicao => $cadaFruta){

    echo "Posicao: {$posicao} | Fruta: {$cadaFruta}" . PHP_EOL; // a variavel $posição retorna qual a posição dos itens do array
                                                                // e a variavel $cadaFruta retorna qual a fruta esta em cada posição
};