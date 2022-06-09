<?php

//captura de informações que consta na variavel global $_SERVER

//echo $_SERVER['REQUEST_URI'];

//Guarda a informação dentro de uma variavel

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {

    include 'telas/home.php';

}elseif ($url ==='/login'){

    echo '<h1>Pagina de Login</h1>';

} elseif ($url ==='/cadastro'){

    echo '<h1>Pagina de Cadastro</h1>';
} else{

    echo '<h1>Pagina não encontrada</h1>';

}