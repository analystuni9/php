<?php
// Define um array associativo $pessoa, contendo informações sobre uma pessoa.
$pessoa = [
    'nome' => 'Danilo',
    'idade' => 30,
    'profissão' => 'Programador',
    'graduação' => 'Tecnologia em Análise de Sistemas',
];

// Verifica se a idade da pessoa é maior ou igual a 18.
if($pessoa['idade'] >= 18){
    echo 'É maior de idade <br>';
} else {
    echo 'É menor de idade <br>';
}
?>
