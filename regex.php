<?php

$telefones = ['(81) 99277-4000', '(81) 99266-5000', '(81) 99752-8000'];

foreach ($telefones as $telefone)
{
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/';
    $telefoneValido = preg_match($regex, $telefone, $correspondencia);
    // var_dump($correspondencia);
    if($telefoneValido) {
        echo 'Telefone Válido'. PHP_EOL;
    }else{
        echo 'Telefone Inválido'. PHP_EOL;
    }

    echo preg_replace($regex, '(XX) \2', $telefone ) . PHP_EOL;

};