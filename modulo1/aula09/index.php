<?php

//captura de informações que consta na variavel global $_SERVER

//echo $_SERVER['REQUEST_URI'];

//Guarda a informação dentro de uma variavel


$url = $_SERVER['REQUEST_URI'];

include 'telas/menu.php';
include 'telas/head.php'; // cabeçalho da pagina



if ($url === '/') {

    include 'telas/home.php';

}elseif ($url ==='/login'){

    include 'telas/login.php';

} elseif ($url ==='/cadastro'){

    include 'telas/cadastro.php';

} else{

    include 'telas/404.php';

}

include 'telas/footer.php'; // rodapé da pagina