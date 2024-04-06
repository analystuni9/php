<?php
$a = 'teste';
$b = 12.8;

// Verifica se $a é do tipo float. Como $a não é um float, o bloco de código dentro do if não é executado.
if(is_float($a)){
    echo 'É float 1! <br>';
}

// Verifica se $b é do tipo float. Como $b é um float, o bloco de código dentro do if é executado.
if(is_float($b)){
    echo 'É float 2! <br>';
}

// Verifica se o número 6565.63 é do tipo float. Como é um float, o bloco de código dentro do if é executado.
if(is_float(6565.63)){
    echo 'É float 3! <br>'; 
}

// Verifica se 'teste' é do tipo float. Como 'teste' não é um float, o bloco de código dentro do if não é executado.
if(is_float('teste')){
    echo 'É float 4! <br>';
}
?>
