
<?php

$nome= "Fabio";
$idade=133;
$profissao = "contador";
$cidade = "Marilia";

?>

<!DOCTYPE html>
<html>

<head>
    <title>.:Exercicio aula 12:.</title>
    <meta charset="utf-8" />
</head>

<body>

 <h1>
     Exercicio
 </h1>

 <h4>Preenchimento de tabela, utilizando infomrações inseridas no php</h4>

<table border="1">

<tr>
    <td>Nome</td>
    <td>Idade</td>
    <td>profissão</td>
    <td>cidade</td>
</tr>

<tr>
    <td>
        <?php
        echo $nome;
        ?>
        </td>
    <td>
        <?php
        echo $idade;
        ?>
        </td>
    <td>
        <?php
        echo $profissao;
        ?>
    </td>
    <td>
        <?php
        echo $cidade;
        ?>
    </td>

</tr>

 </table>

</body>

</html>