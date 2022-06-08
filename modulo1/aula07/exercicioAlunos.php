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

$alunos= [ //dimensao 1
            
        $aluno1,
        $aluno2,

            [//dimensao 2

                [//dimensao 3
                    
                ]

            ]

        ];

//echo $alunos[0][0][0];
?>


<table border="1">
    
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

    </thead>

    <tbody>
        ....
    </tbody>

</table>