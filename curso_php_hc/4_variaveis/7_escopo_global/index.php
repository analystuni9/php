<?php
$teste = 'asd'; // Variável global $teste definida com valor 'asd'
echo "$teste teste global 1"; // Imprime o valor da variável global $teste
echo '<br>';

if(true){
    $teste = 'dsa'; // Variável local $teste dentro do bloco if, substitui a variável global $teste
    echo "$teste teste if local"; // Imprime o valor da variável local $teste
    echo '<br>';
}

echo "$teste teste global 2"; // Imprime o valor da variável global $teste após a alteração no bloco if
echo '<br>';

function funcao(){
    $teste = 'xsw'; // Variável local $teste dentro da função funcao()
    echo "$teste teste local função"; // Imprime o valor da variável local $teste
    echo '<br>';
}

funcao(); // Chama a função funcao()

function fGlobal(){
    global $teste; // Utiliza a variável global $teste dentro da função fGlobal()
    $teste = 2; // Altera o valor da variável global $teste
    echo "$teste testando função global"; // Imprime o novo valor da variável global $teste
    echo '<br>';
}

fGlobal(); // Chama a função fGlobal()

echo "$teste teste global 3"; // Imprime o valor da variável global $teste após a alteração na função fGlobal()
echo '<br>';
?>
