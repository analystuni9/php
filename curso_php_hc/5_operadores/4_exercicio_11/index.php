<?php
// Realiza a multiplicação da string '5' pelo número 12
// Como a string '5' é convertida implicitamente para um número, a operação resulta em 60
$operacao = '5' * 12;
echo $operacao . '<br>'; // Saída: 60

// Obtém e imprime o tipo de dado da variável $operacao
echo gettype($operacao); // Saída: integer, pois o resultado da multiplicação é um número inteiro
echo '<br>';

// Imprime o tipo de dado de um array vazio
echo gettype([]); // Saída: array, pois [] é a sintaxe para um array vazio
echo '<br>';

// Imprime o tipo de dado do número de ponto flutuante 12.12
echo gettype(12.12); // Saída: double, pois 12.12 é um número de ponto flutuante (float)
echo '<br>';

// Imprime o tipo de dado da string 'teste'
echo gettype('teste'); // Saída: string, pois 'teste' é uma sequência de caracteres (string)
echo '<br>';
?>
