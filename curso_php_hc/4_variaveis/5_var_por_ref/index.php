<?php
$x = 10;      // Define $x como 10
$y =& $x;     // $y é uma referência para $x

echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo "Valor de x é: $x linha 5";  // Imprime o valor de $x
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo "Valor de y é: $y linha 7";  // Imprime o valor de $y
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade

$y = 15;      // Altera o valor de $y, que é uma referência para $x

echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo 'Atribuição após referência';  // Imprime uma mensagem indicando a mudança
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo "Valor de x é: $x linha 13";  // Imprime o valor de $x após a alteração de $y
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo "Valor de y é: $y linha 15";  // Imprime o valor de $y após a alteração
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade

$x = 20;      // Altera o valor de $x

echo 'Atribuição após referência 2';  // Imprime uma mensagem indicando a mudança
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo "Valor de x é: $x linha 20";  // Imprime o valor de $x após a alteração
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
echo "Valor de y é: $y linha 22";  // Imprime o valor de $y após a alteração de $x
echo '<br>';  // Imprime uma quebra de linha para melhorar a legibilidade
?>
