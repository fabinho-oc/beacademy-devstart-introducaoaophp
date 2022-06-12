<!DOCTYPE html>
    <html>
        <head>
            <title>Aula 09-Minha Navegação</title>
        </head>

        <body>

            <!-- CSS only -->
            <a><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"></a>


        </body>

</html>


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

    include 'telas/404.php';

}

?>