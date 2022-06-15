<?php

//Codificação (não é criptografia)
$senha = '123456';
$code = 'MTIzNDU2';

echo base64_encode($senha).PHP_EOL; //codifica

echo base64_decode($code) .PHP_EOL; //decodifica 

