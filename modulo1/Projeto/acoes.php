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

function excluir(){

    //Aulas 43 e 44

    $id = $_GET['id'];
    //echo 'Excluindo ......' . $id;

    $contatos = file('dados/contatos.csv'); // recuperar e listar os contatos,  cria uma cópia do arquivo na memoria

    unset($contatos[$id]); //em tradução literal é não setar, mas nesse caso sera utilizado para excluir uma posição do array

    //o processo sera pegar essa copia alterada pela exclusão(o que restou), e;
    // sobrepor o arquivo que esta no servidor

    unlink('dados/contatos.csv'); // passo 1 excluir o arquivo
    
    $arquivo = fopen('dados/contatos.csv', 'a+'); // passo 2 cria um novo arquivo e abre para gravação
    
    foreach($contatos as $cadaContato){ // passo 3 realiza a leitura dos contatos que sobraram e gravam no novo arquivo

            fwrite($arquivo, $cadaContato); // escreve no novo arquivo aberto cada uma das informações que ainda existem no arquivo que esta na memória
    };

    $mensagem = 'Pronto, contato excluído';

    include 'telas/mensagem.php';

}

function editar(){
    $id = $_GET['id'];

    //echo 'Editando .....' . $id;
    $contatos = file('dados/contatos.csv'); // busca o arquivo

    $dados = explode(';', $contatos[$id]); // quebra 1 string de array em outras strings de array a cada intervalo que tenha ';'

    //var_dump($dados);

    if ($_POST){
        //echo 'funcionou';

        $nome =$_POST['nome']; // RECUPERA OS DADOS QUE ESTÃO NO FORMULARIO
        $email =$_POST['email'];
        $telefone=$_POST['telefone'];

        $contatos[$id]="{$nome};{$email};{$telefone}".PHP_EOL; // AGRUPA OS DADOS COLETADOS NO PADRÃO DE INFORMAÇÃO DO CSV

        unlink ('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+'); //abre o arquivo contatos na modalidade de ler e gravar

        foreach($contatos as $cadaContato){

            fwrite($arquivo, $cadaContato); //escreve no arquivo as informações

        }

        fclose($arquivo); //fecha o arquivo que foi gravado

        $mensagem = 'Pronto, contato atualizado';

        include 'telas/mensagem.php';

    }

    include 'telas/editar.php';

}