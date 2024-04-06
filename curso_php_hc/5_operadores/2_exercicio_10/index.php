<?php
$a = 10; // Atribui o valor 10 à variável $a
$x = 5;  // Atribui o valor 5 à variável $x
$z = 9;  // Atribui o valor 9 à variável $z

// Calcula a expressão: ($x - $z) / $a * $z
// Primeiro, realiza a subtração ($x - $z), resultando em -4.
// Em seguida, divide o resultado pela variável $a (-4 / 10), resultando em -0.4.
// Por fim, multiplica o resultado pelo valor de $z (-0.4 * 9), resultando em -3.6.
$operacao = ($x - $z) / $a * $z;

// Imprime o resultado da operação
echo $operacao; // Saída: -3.6
?>
