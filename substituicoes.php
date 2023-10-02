<?php

$texto = 'Olá, seu filho da puta do caralho';
str_replace('puta', '****', $texto);
//parametros: 1- o que substituiremos; 2- pelo que substituiremos; 3- onde substituiremos?

echo str_replace(['puta', 'caralho'], '****', $texto);

echo strtr($texto, 'poxa', '****');
//texto que substituiremos, 2- O que, 3- pelo que;
// Ela trabalha com caracteres e não por strings;

echo strtr($texto, ['poxa' => 'p', 'caralho' => 'c']);

//documentação exemplo:

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hello all, I said hello") . PHP_EOL;
//está substituindo hello por hi e hi por hello;

