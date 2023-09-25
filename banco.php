<?php
require 'funcoes.php';

$contasCorrentes = [
    '123-456-789-10' =>[
    'titular' => 'Roberto',
    'saldo'=> '5000',
    ],
    '231-789-456-11'=> [
    'titular' => 'LeoMessi',
    'saldo'=> '4000'
    ],

    '789-231-456-20'=>[
    'titular' => 'Eduarda',
    'saldo'=> '8000'
    ]
];

$contasCorrentes['123-456-789-10'] = sacar($contasCorrentes['123-456-789-10'], valorASacar:500);
$contasCorrentes['231-789-456-11'] = sacar($contasCorrentes['231-789-456-11'], valorASacar:500);
$contasCorrentes['789-231-456-20'] = depositar($contasCorrentes['789-231-456-20'], valorADepositar:1000);

// foreach($contasCorrentes as $cpf => $conta){
//     exibeMensagem(
//         "$conta[titular] $conta[saldo]"
//     );
// }
// não precisamos saber o indice para percorrer. Sendo exibida a mensagem de uma forma mais simples;

titularComLetraMaiuscula($contasCorrentes['123-456-789-10']);

// echo "<ul>";
// ### forma complexa;
// foreach($contasCorrentes as $cpf => $conta){
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeMensagem(
//         "$cpf $titular $saldo"
//     );
// }
// ######## adicionaremos chaves em volta do código; 
// echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Rob</title>
</head>
<body>
    <h1> Contas Correntes </h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3> <?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
            </dt>
            <dd>
                Saldo:<?php echo $conta['saldo']; ?> 
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
