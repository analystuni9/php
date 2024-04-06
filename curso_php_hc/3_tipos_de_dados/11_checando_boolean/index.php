<?php
$a = true;

// Verifica se $a é do tipo booleano. Como $a é um booleano, o bloco de código dentro do if é executado.
if(is_bool($a)){
    echo 'É um booleano 1 <br>';
}

// Verifica se 0 é do tipo booleano. Como 0 não é um booleano, o bloco de código dentro do if não é executado.
if(is_bool(0)){
    echo 'É um booleano 2 <br>';
}

// Verifica se false é do tipo booleano. Como false é um booleano, o bloco de código dentro do if é executado.
if(is_bool(false)){
    echo 'É um booleano 3 <br>';
}

// Verifica se 1 é do tipo booleano. Como 1 não é um booleano, o bloco de código dentro do if não é executado.
if(is_bool(1)){
    echo 'É um booleano 4 <br>';
}
?>
