<?php

/*$alunos= [ //dimensao 1
            
            [//dimensao 2

                [//dimensao 3
                    "Chiquim da silva"
                ]

            ]

        ];
*/

$aluno1 = [
    'Chiquim', //0
    'chiquim@email.com', // 1
    '85 9 8889-0000', // 2
            [ //3
                9, 
                8.5,
                7.5,
                10,
            ]
];

$aluno2 = [
    'Maria',
    'maria@email.com',
    '85 9 9999-0000',
            [
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


var_dump($alunos);