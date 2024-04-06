<?php
$str = "Danilo";
$num = 10;

// Verifica se $str é uma string. Como é uma string, o bloco de código dentro do if é executado.
if(is_string($str)){
    echo "$str é uma string 1 <br>";
}

// Verifica se $num é uma string. Como $num não é uma string, o bloco de código dentro do if não é executado.
if(is_string($num)){
    echo "$num é uma string 2 <br>";
}
?>
