<?php

$notas =[
    'Eduarda' => '10',
    'Roberto' => '7',
    'Marcela' => '9',
];

/* Se eu quero realizar o sort só que manter as chave, eu utilizo asort. Se eu quero utilizar o rsort, mas mantendo as chaves eu utilizo arsort, quando eu executo isso daqui eu tenho lá o meu array de forma ordenada, 
ou seja, ele está lá de forma decrescente só que as minhas chaves foram mantidas. */

arsort(array: $notas);
var_dump($notas);

//ksort ordena utilizando as chaves;