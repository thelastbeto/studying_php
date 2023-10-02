<?php

// Juntando os arrays

$telefones = ['(24) 99999-9999', '(81) 99288-9900', '(81) 99788-9999'];
$aleatorio = '.Neymar';

echo implode(' ', $telefones) . PHP_EOL;
//parametros -> caractere que vai unir a string, string;

echo trim($aleatorio, '.'); // Só remove caso esteja nas extremidades