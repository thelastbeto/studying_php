<?php

//string numérica
$anoNascimento = '1997';

//heredoc e nowdoc

function geraEmail($nome): void
{   //heredoc é equivalente a "";
    //nowdoc equivalente a aspas simples 'FIM' entre aspas;

    $conteudoEmail = <<<FINAL
    Olá, $nome!

    O contato está sendo feito, pois você ainda não realizou sua última prova do ano letivo.
    Por favor, agenda o dia de sua prova e a realize.
    
    FINAL;

    echo $conteudoEmail();
};

geraEmail('');