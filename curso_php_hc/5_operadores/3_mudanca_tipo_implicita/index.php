<?php
// Imprime o resultado da divisão de 5 por 2
echo 5/2; // Saída: 2.5
echo '<br>';

// Verifica se o resultado da divisão 5/2 é do tipo float
// Como o resultado é um número de ponto flutuante, a condição é verdadeira e imprime 'É float'
if(is_float(5/2)){
    echo 'É float <br>'; // Saída: 'É float'
}

// Imprime o número 2.3
echo 2.3; // Saída: 2.3
echo '<br>';

// Verifica se o número 2.3 é do tipo string
// Como 2.3 é um número literal, não uma string, a condição é falsa e não imprime nada
if(is_string(2.3)){
    echo 'É string <br>';
}

// Concatena as variáveis $nome e $sobrenome com um espaço entre elas
// e armazena o resultado na variável $nomeCompleto
$nome = 'Danilo';
$sobrenome = 'Brito';
$nomeCompleto = $nome . ' ' . $sobrenome;

// Imprime o nome completo
echo $nomeCompleto; // Saída: 'Danilo Brito'
echo '<br>';
?>
