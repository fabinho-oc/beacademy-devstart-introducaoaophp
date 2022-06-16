<?php

function login() {

    include 'telas/login.php';

}

function cadastro(){

    if($_POST){
       //var_dump($_POST);

        $nome = $_POST['nome']; //captura os dados dos formulario digitado pelo usuario e conforme name
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv','a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}" . PHP_EOL); // escrever no arquivo

        fclose($arquivo); //fecha o arquivo que foi gravado

        $mensagem = 'Pronto, cadastro realizado!';// mensagem a ser apresentada na tela do usuario

        include 'telas/mensagem.php';
    }

    include 'telas/cadastro.php';
    
}

function home(){

    include 'telas/home.php';

}

function listar(){

    //$contatos= ['A', 'B', 'C'];

    $contatos = file('dados/contatos.csv'); // Trazendo os dados dispostos no arquivo .csv para serem apresentados
    // na pagina disposta no listar.php ; esta file função faz a leitura do CSV e transforma em um array do php
    include 'telas/listar.php';

}

function erro404(){

    include 'telas/404.php';

}

function relatorio(){

    include 'telas/relatorios.php';

}