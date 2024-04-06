<?php
// Expressão: 3 + 2 * 5
// Primeiro, a multiplicação (2 * 5) é executada, resultando em 10.
// Em seguida, a adição (3 + 10) é executada, resultando em 13.
echo 3 + 2 * 5; // Saída: 13
echo '<br>';

// Expressão: (3 + 2) * 5
// Primeiro, a adição (3 + 2) é executada, resultando em 5.
// Em seguida, a multiplicação (5 * 5) é executada, resultando em 25.
echo (3 + 2) * 5; // Saída: 25
echo '<br>';

// Expressão: 3 + 2 / 5
// Primeiro, a divisão (2 / 5) é executada, resultando em 0.4.
// Em seguida, a adição (3 + 0.4) é executada, resultando em 3.4.
echo 3 + 2 / 5; // Saída: 3.4
echo '<br>';

// Expressão: (3 + 2) / 5
// Primeiro, a adição (3 + 2) é executada, resultando em 5.
// Em seguida, a divisão (5 / 5) é executada, resultando em 1.
echo (3 + 2) / 5; // Saída: 1
echo '<br>';

$a = 5;
$b = 2;
$c = 10;

// Expressão: $a + $b / $c
// Primeiro, a divisão ($b / $c) é executada, resultando em 0.2.
// Em seguida, a adição ($a + 0.2) é executada, resultando em 5.2.
echo $a + $b / $c; // Saída: 5.2
echo '<br>';

// Expressão: $c + $b / $a
// Primeiro, a divisão ($b / $a) é executada, resultando em 0.4.
// Em seguida, a adição ($c + 0.4) é executada, resultando em 10.4.
echo $c + $b / $a; // Saída: 10.4
?>
