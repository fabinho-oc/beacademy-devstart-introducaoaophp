<?php

//captura de informações que consta na variavel global $_SERVER

//echo $_SERVER['REQUEST_URI'];

//Guarda a informação dentro de uma variavel

$url = $_SERVER['REQUEST_URI'];

include 'telas/menu.php';


if ($url === '/') {

    include 'telas/home.php';

}elseif ($url ==='/login'){

    include 'telas/login.php';

} elseif ($url ==='/cadastro'){

    include 'telas/cadastro.php';
    
} else{

    echo '<h1>Pagina não encontrada</h1>';

}