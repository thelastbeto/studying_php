<?php
// #### Verificar todo mundo que não fez a prova no segundo bimestre.

$notasBimestre1 =[
    'Eduarda' => '10',
    'Roberto' => '7',
    'Marcela' => '9',
];

$notasBimestre2 =[
    'Eduarda' => '9',
    'Roberto' => '8',
];

var_dump(array_diff($notasBimestre1, $notasBimestre2));
//pega todos os elementos cujos valores não estejam nos outros arrays, ou seja, para fazer essa comparação, se um elemento estar em um array ou no outro, ela só leva em consideração os valores, ou seja, aqui as notas. 
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
//Retorna as chaves, ignorando os valores;
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
//Compara a chave e o valor a fim de verificar as diferenças.

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));
//array_keys retorna chaves;
var_dump(array_values($alunosFaltantes));
//pegando valores;

$nomeAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_combine($nomeAlunos, $notasAlunos));
// retorna a combinação das chaves e valores dos arrays, porém, precisam ter o mesmo tamanho;

var_dump(array_flip($alunosFaltantes));
//inverte os valores (chave vira valor e valor vira chave);


