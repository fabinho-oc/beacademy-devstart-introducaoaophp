<?php

declare(strict_types=1); // declaracao considerando o tipo das informa;óes

function welcome(string $nome): string
{
    return "Bem vindo {$nome}";

}


function soma(int $n1, int $n2): float
{

    //echo $n1+$n2;
    return $n1+$n2;

}

echo soma(10,20);

echo PHP_EOL . '------------' . PHP_EOL;

echo soma(10,90);

echo PHP_EOL . '------------' . PHP_EOL;

$nome = "Chiquim";

echo welcome($nome);

echo PHP_EOL . '------------' . PHP_EOL;
echo welcome("Zezim");