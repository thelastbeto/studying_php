<?php

$nome = "Roberto Junior";
$email = ' roberto@xpto.com';
$senha ='ííííí';
//vamos extrair um pedaço da string:
echo substr($email, 0, 8) . PHP_EOL;
//variavel, inicio e fim;
echo substr($email, 9) . PHP_EOL;
//quando não passamos o parametro final, irá retornar todo o resto da string.

$posicaoDoArroba = strpos($email, '@');
//strpos - 1 parametro -> passamos a variavel, 2- o que queremos buscar, 

if (mb_strlen($senha) < 8){
    echo "Essa senha não é segura" . PHP_EOL;
}; //strlen -> retorna o tamanho de uma string sendo retornado em bytes;

$usuario = substr($email,0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL; //letras maiusculas;
echo strtolower($usuario) . PHP_EOL; // letras minusculas;

// Partindo uma string com Explode
list($nome, $sobrenome) = (explode(' ', $nome));
echo 'Nome' . $nome . PHP_EOL;
echo 'Sobrenome'.  $sobrenome . PHP_EOL;
//explode parametros -> separador, string, limit que terá no máximo essa quantidade desses elementos. 

echo trim($email); // remove espaços por padrão, porém, por padrão, ela pode receber o caracter para apagar.
// Só remove caso esteja nas extremidades



