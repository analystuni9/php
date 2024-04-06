<?php
// Define a função soma() que aceita dois parâmetros $a e $b e imprime a soma deles
function soma($a, $b){
    echo $a + $b;  // Imprime a soma de $a e $b
    echo '<br>';   // Imprime uma quebra de linha para melhorar a legibilidade
}

// Chama a função soma() com diferentes pares de argumentos
soma(2, 4);    // Imprime a soma de 2 e 4 (6)
soma(6, 8);    // Imprime a soma de 6 e 8 (14)
soma(10, 10);  // Imprime a soma de 10 e 10 (20)
?>
