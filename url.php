<?php

$url = 'https://alura.com.br';

//str_starts_with verifica se inicia com;
if (str_starts_with($url, 'https'))
{
    echo "É uma URL segura" . PHP_EOL;
} else {
    echo "Não é uma URL segura" . PHP_EOL;
};

//str_ends_with verifica se termina com;

if(str_ends_with($url, 'br'))
{
    echo "É um domínio do Brasil" . PHP_EOL;
} else {
    echo "Não é uma URL do Brasil" . PHP_EOL;
};


