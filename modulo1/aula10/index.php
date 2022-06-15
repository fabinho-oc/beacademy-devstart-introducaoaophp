<?php

$notasCursoA =[
10,
9,
9.5,
7,
];

$notasCursoB =[
8,
9.4,
5,
6,
];


function mediaDenotas(array $notas): float
{
//$total =  array_sum($notas);// soma todos os valores dentro do array //= 0; // 10 19 28.5
//$quantidade = count($notas);//pega a quantidade de elementos dentro do array = 0; // 1 2 3

//foreach ($notas as $cadaNota){
//$total += $cadaNota;
//$quantidade ++;
//}

return array_sum($notas) / count($notas);  //$total / $quantidade; // 28.5 / 3

}

echo mediaDenotas($notasCursoA) . PHP_EOL;
echo mediaDenotas($notasCursoB) . PHP_EOL;