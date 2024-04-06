<?php
// Imprime o valor booleano true, seguido de uma quebra de linha (<br>).
echo true;
echo '<br>';

// Imprime o valor booleano false, seguido de uma quebra de linha (<br>).
echo false;

// Verifica se a expressão true é verdadeira. Como é verdadeira, o bloco de código dentro do if é executado.
if(true){
    echo 'É verdadeiro <br>';
}

// Verifica se a expressão 5 > 2 é verdadeira. Como é verdadeira, o bloco de código dentro do if é executado.
if(5 > 2){
    echo 'É verdadeiro <br>';
}

// Define a variável $podeEntrar como true.
$podeEntrar = true;

// Verifica se a variável $podeEntrar é true. Como é verdadeira, o bloco de código dentro do if é executado.
if($podeEntrar){
    echo "O usuário pode entrar <br>";
}
?>
