<?php

// mesmo problema do base 64 (tbm não indicado apra fazer senha)

$senha='123456';
$code ='e10adc3949ba59abbe56e057f20f883e';

echo md5($senha) . PHP_EOL;

echo md5($code) . PHP_EOL;

