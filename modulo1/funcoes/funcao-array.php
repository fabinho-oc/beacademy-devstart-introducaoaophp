<?php

declare(strict_types=1);

function mostrarNomes( array $nomes):void
{

    foreach ($nomes as $cadanome){
        echo "Nome: " .$cadanome.PHP_EOL; 

    }

}

mostrarNomes (['Joaquim', 'Luzia', 'Filomena']);