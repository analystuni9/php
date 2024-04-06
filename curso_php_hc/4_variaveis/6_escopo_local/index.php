<?php
$x = 10; // Variável global $x com valor 10
echo "$x global <br>"; // Imprime o valor da variável global $x

function teste(){
    $x = 5; // Variável local $x dentro da função teste com valor 5
    echo "$x local <br>"; // Imprime o valor da variável local $x dentro da função teste
}

teste(); // Chama a função teste()

function testando(){
    $x = 12; // Variável local $x dentro da função testando com valor 12
    echo "$x local 2 <br>"; // Imprime o valor da variável local $x dentro da função testando
}

testando(); // Chama a função testando()

teste(); // Chama a função teste() novamente

$x = 99; // Altera o valor da variável global $x para 99
echo "$x global <br>"; // Imprime o novo valor da variável global $x
?>
