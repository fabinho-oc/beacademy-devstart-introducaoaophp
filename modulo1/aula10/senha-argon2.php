<?php

//Algoritimo Argon2;
//É o mais seguro atualemte, pois sempre gera um novo hash.

$senha = '123456';

echo password_hash($senha,PASSWORD_ARGON2I) . PHP_EOL;
