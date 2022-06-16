<h1>Listar Contatos</h1>

<?php //var_dump($contatos); ?>

<table Class = "table table-hover table -striped">

    <thead Class = "table-dark">

        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

    </thead>

    <tbody>

        <?php // foreach para trazer as paginas e apresentar na pagina Listar Contatos
            foreach($contatos as $cadacontato){

                $partes = explode(';',$cadacontato);// essa função quebra a string em varias partes,
                //primeiro informa o elemento que esta separando as strings e depois a variavel

                // a estrutura abaixo é para fazer a apresentação da pagina web, sendo um por linha
                echo '<tr>';

                    //echo '<td>' . $cadacontato . '</td>';
                    echo '<td>' . $partes[0] . '</td>'; // a variavel "$partes" contém as partes da string separadas em arrays
                    echo '<td>' . $partes[1] . '</td>';
                    echo '<td>' . $partes[2] . '</td>';

                echo '</tr>';
            }

        ?>

    </tbody>

</table> 