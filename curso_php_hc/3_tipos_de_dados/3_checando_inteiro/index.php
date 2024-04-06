<?php
// Verifica se o número 5 é um inteiro. Como é verdadeiro, o bloco de código dentro do if é executado.
if(is_int(5)){  
    echo 'É um inteiro ex1 <br>';
}

// Verifica se a string 'texto' é um inteiro. Como não é verdadeiro, o bloco de código dentro do if não é executado.
if(is_int('texto')){  
    echo 'É um inteiro ex2 <br>';
}

$a = 10;
// Verifica se a variável $a é um inteiro. Como é verdadeiro, o bloco de código dentro do if é executado.
if(is_int($a)){
    echo 'É inteiro ex3 <br>';
}
?>
