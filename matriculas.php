<?php
// #### Verificar todo mundo que não fez a prova no segundo bimestre.

$Alunos2023 =[
    'Eduarda',
    'Roberto',
    'Marcela',
    'Leo',
    'Maria'
];

$novosAlunos =[
    'Karlstron',
    'Keanu',
    'John',
    'Winston',
    'BigMouse'
];

$alunos2024 = array_merge($Alunos2023, $novosAlunos);
//retorna a junção dos arrays;
var_dump($alunos2024);

/* OBS: Em caso de $Alunos2023 + $novosAlunos, caso o array posterior tivesse o mesmo índice do anterior, seria totalmente ignorado,
ou seja, caso tenha Karlstron tenha o indice 0 e Eduarda o Indice 0, Karls seria ignorado */

// spread operator

$alunos2024 = [...$Alunos2023, ...$novosAlunos];
//desempacota um array

//adicionando elementos:

$Alunos2023[] = 'Douba';
//adiciona um elemento;

array_push($Alunos2023, 'Bobby', 'Kendrick','Eminem');
//adiciona elementos ao final do array;

array_unshift($alunos2023, 'Joyner Lucas', 'Doe B');
//Adiciona elementos no inicio do array;

array_shift($Alunos2023);
// reordena arrays. Array numérico vai ser reordenado, array associativo com as chaves com strings não vão ser alteradas.

