<?php

$notas = [
        [
            'nomeAluno'=> 'Roberto',
            'nota'=> '7',
        ],
        [
            'nomeAluno'=> 'Eduarda',
            'nota'=> '10',  
        ],
        [
            'nomeAluno'=> 'Marcela',
            'nota'=> '9',
        ]
    ];

function ordenaNotas(array $nota1, array $nota2): int 
{
    //Se o primeiro elemento antes do operador for menor do que o elemento depois do operador ele retorna -1, se o primeiro elemento for maior 
    // ele retorna 1 e se eles forem iguais ele retorna 0.
    return $nota2['nota'] <=> $nota1['nota'];
};

usort($notas, callback: 'ordenaNotas');
var_dump($notas);
