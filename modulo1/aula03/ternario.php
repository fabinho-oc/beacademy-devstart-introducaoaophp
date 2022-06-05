<?php

$idade = 17;

echo $idade >= 18 ? "de maior": "de menor";

echo "<br>";

echo isset($nome) ? $nome : "Nome não definido";

$nome = "fabio";
echo "<br>";

echo $nome ?? "nome não definido";