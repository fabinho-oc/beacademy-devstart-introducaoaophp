<?php

$aluno1 = [
   'nome' => 'Chiquim', //0
   'email' => 'chiquim@email.com', // 1
   'telefone' => '85 9 8889-0000', // 2
        'notas' => [ //3
                9, 
                8.5,
                7.5,
                10,
            ]
];

$aluno2 = [
   'nome' => 'maria', //0
   'email' => 'maria@email.com', // 1
   'telefone' => '85 9 9999-0000', // 2
        'notas' => [ //3
                9,
                8.5,
                7.5,
                10,
            ]
];

$aluno3 = [
   'nome' => 'Lucas', //0
   'email' => 'lucas@email.com', // 1
   'telefone' => '81 9 97777-0000', // 2
        'notas' => [ //3
                9,
                8.5,
                7.5,
                10,
            ]
];

$aluno4 = [
   'nome' => 'Zezim', //0
   'email' => 'Zezim@email.com', // 1
   'telefone' => '81 9 98888-0001', // 2
        'notas' => [ //3
                9,
                8.5,
                7.5,
                10,
            ]
];



$alunos= [ //dimensao 1
            
        $aluno1,
        $aluno2,
        $aluno3,
        $aluno4,

            [//dimensao 2

                [//dimensao 3
                    
                ]

            ]

        ];

//echo $alunos[0][0][0];
/*
foreach ($alunos as $cadaaluno) {
   // var_dump($cadaaluno);

    echo $cadaaluno['nome'].'<br>';

}
*/
?>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class = "container">

<h1 class="mt-5">Alunos</h1>
<hr>
<table class= "table table-hover table-striped mt-5">
    
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

    </thead>

    <tbody>
        <?php

            foreach ($alunos as $cadaaluno) {
                
                echo '<tr>';
                
                    echo '<td>' . $cadaaluno['nome'] .'</td>';
                    echo '<td>' . $cadaaluno['email'] .'</td>';
                    echo '<td>' . $cadaaluno['telefone'] .'</td>';
                
                echo '</tr>';
            }
        ?>
    </tbody>

</table>
</div>