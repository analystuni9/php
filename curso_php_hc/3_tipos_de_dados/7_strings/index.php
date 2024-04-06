<?php 
// Imprime uma string delimitada por aspas duplas, seguida de uma quebra de linha (<br>).
echo "Testando o texto com aspas duplas <br>";

// Imprime uma string delimitada por aspas simples, seguida de uma quebra de linha (<br>).
echo 'Testando o texto com aspas simples <br>';

// Imprime uma string delimitada por aspas duplas, incluindo aspas simples dentro da string.
// A aspas simples dentro de aspas duplas não precisa ser escapada.
echo "Hello World 'Welcome' <br>";

// Imprime uma string delimitada por aspas simples, incluindo aspas duplas dentro da string.
// A aspas duplas dentro de aspas simples não precisa ser escapada.
echo 'Hello World "Welcome" <br>';

$nome = 'Danilo';

// Interpolação de variáveis: imprime uma string delimitada por aspas duplas e substitui $nome pela variável correspondente.
echo "Seu nome é: $nome";
echo '<br>';

// Nenhuma interpolação de variáveis ocorre aqui porque as aspas simples não interpolarão variáveis.
// A saída será exatamente como a string delimitada por aspas simples.
echo 'Seu nome é: $nome';
echo '<br>';
?>
