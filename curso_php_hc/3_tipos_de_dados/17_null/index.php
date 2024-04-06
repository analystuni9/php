<?php
// Imprime null diretamente. Isso irá imprimir uma string vazia, pois null é convertido para uma string vazia ao ser impresso.
echo null;

// Define a variável $nome como null.
$nome = null;

// Verifica se $nome é null usando a função is_null(). Como é null, o bloco de código dentro do if é executado.
if(is_null($nome)){
    echo 'O valor é nulo!';
}

// Define a variável $nome como 'Danilo'.
$nome = 'Danilo';

// Verifica novamente se $nome é null usando a função is_null(). Como não é null, o bloco de código dentro do if não é executado.
if(is_null($nome)){
    echo 'O valor é nulo!';
}
?>
