<?php
//AULA 40
$arquivo = fopen('produtos.csv','a+'); // no primeiro campo informa o arquivo e no segundo campo informar como o arquivo sera abaerto ('r' (reed) leitura, 'w' (white) escrever ou 'a+'ler e escrever)
//a função abre o arquivo e quando não encontra ele cria e abre o arquivo.

// para escrever no arquivo:
fwrite ($arquivo, 'Alessandro' . PHP_EOL); //primeiro informa o arquivo, no proximo informa os dados que estao sendo escrito e por ultimo para quebrar a linha PHP_EOL;
fwrite ($arquivo, 'Bruno' . PHP_EOL);
fwrite ($arquivo, 'Luiz' . PHP_EOL);

fclose($arquivo); // variavel para salvar e fechar o arquivo que foi aberto
