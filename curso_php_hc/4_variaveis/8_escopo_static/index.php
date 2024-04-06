<?php
// Função teste()
function teste(){
    $a = 0;    // Define uma variável local $a e atribui o valor 0
    $a++;      // Incrementa $a
    echo "$a <br>";  // Imprime o valor de $a
}

// Chama a função teste() três vezes
teste();
teste();
teste();

// Função testeStatic()
function testeStatic(){
    static $a = 0;  // Define uma variável estática $a e atribui o valor 0
    $a++;           // Incrementa $a
    echo "$a <br>"; // Imprime o valor de $a
}

// Chama a função testeStatic() três vezes
testeStatic();
testeStatic();
testeStatic();
?>
