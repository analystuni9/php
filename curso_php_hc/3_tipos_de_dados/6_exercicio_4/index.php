<?php 
// Imprime o número 4.15, seguido de uma quebra de linha (<br>).
echo 4.15;
echo '<br>';

// Imprime o número 12.12, seguido de uma quebra de linha (<br>).
echo 12.12;
echo '<br>';

// Define a variável $c como -78.1.
$c = -78.1;
// Define a variável $d como 10.

echo $c;
echo '<br>';

// Verifica se $c é do tipo float. Como $c é um float, o bloco de código dentro do if é executado.
if(is_float($c)){
    echo 'Sim, podemos ter floats negativos <br>';
}

// Verifica se $d é do tipo int. Como $d é um int, o bloco de código dentro do if é executado.
if(is_int($d)){
    echo 'É um inteiro <br>';
}
?>
