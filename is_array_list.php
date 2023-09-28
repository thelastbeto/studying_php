<?php

$notas =[
    'Eduarda' => '10',
    'Roberto' => '7',
    'Marcela' => '9',
];

if (is_array($notas)){
    echo 'Sim, é um array' . PHP_EOL;
};

var_dump(array_is_list($notas));
//retorna se o array é numérico ou não - bool;

/* verificando se uma chave existe dentro de um array;

 foreach($notas as $aluno => $nota) {
     if ($aluno === 'Roberto'){
         return true;
     }
 };
 */
echo 'Roberto fez essa prova' . PHP_EOL;
var_dump(isset($notas['Roberto']));
/* array_key_exists e isset 
array_key_exists -> Verifica a existencia da chave;
isset - Verifica se dentro do array existe uma chave e se não é nulo;
*/
echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));
//verifica se o valor existe

echo 'Quem tirou 10?'. PHP_EOL;
var_dump(array_search(10, $notas));
//caso não tenha, retorna um boolean(false)