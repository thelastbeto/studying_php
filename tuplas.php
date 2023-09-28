<?php

//Pequeno conjunto de elementos que a posição dele pode simbolizar algo;

$dados = ['Roberto', 10, 25];
list($nome, $nota, $idade) = $dados;
//O que essa função faz é ficar antes do operador de atribuição, ou seja, do lado esquerdo do sinal de igual para criar novas variáveis. Você passa por parâmetro variáveis que não existem para o PHP criar, para essa função list criar, baseado no que está do lado direito.

extract($dados);
//Percorre o array e transforma cada uma das chaves em uma variável;
//Importante só utilizar em arrays que você confia, é bom ter cuidado nesta função;

compact('nome', 'nota', 'idade');
//transforma variáveis separadas e compacta em array;

//principais funções: filter, map, reduce;

var_dump($nome, $nota, $idade);

