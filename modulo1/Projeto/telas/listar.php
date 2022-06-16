<h1>Listar Contatos</h1>

<?php //var_dump($contatos); ?>

<table Class = "table table-hover table -striped">

    <thead Class = "table-dark">

        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>

    </thead>

    <tbody>

        <?php // foreach para trazer as paginas e apresentar na pagina Listar Contatos
            foreach($contatos as $posicao => $cadacontato){ // a variavel posicao vai guardar a posição da informação dentro do array 

                $partes = explode(';',$cadacontato);// essa função quebra a string em varias partes,
                //primeiro informa o elemento que esta separando as strings e depois a variavel

                // a estrutura abaixo é para fazer a apresentação da pagina web, sendo um por linha
                echo '<tr>';

                    //echo '<td>' . $cadacontato . '</td>';
                    echo '<td>' . $partes[0] . '</td>'; // a variavel "$partes" contém as partes da string separadas em arrays
                    echo '<td>' . $partes[1] . '</td>';
                    echo '<td>' . $partes[2] . '</td>';
                    echo "<td>
                                <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir</a>
                                <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'>Editar</a>
                    
                        </td>"; // a class='btn btn-danger faz com que o botão fique vermelho e a class btn-sm (btn small) faz com que ele fique menor
                                // o nome utilizado "id" dentro do href não importa, poderia ser outro, e tudo que esta após a interrogação pode ser capturado atraves da requisição "$_GET" na barra de endereço
                                // a class='btn btn-warning faz com que o botão fique amarelo e a class btn-sm (btn small) faz com que ele fique menor


                echo '</tr>';
            }

        ?>

    </tbody>

</table> 