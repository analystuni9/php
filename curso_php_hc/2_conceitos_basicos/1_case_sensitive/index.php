<?php
// Não é case sensitive
echo 'teste <br>';
eChO 'testando 2 <br>'; // Esta linha funciona igualmente porque o comando echo é case insensitive.
ECHO 'testando 3 <br>'; // Esta linha também funciona igualmente.

// É case sensitive
$nome = 'Danilo';
$NOME = 'Brito';

echo $nome; // Exibe 'Danilo', já que a variável $nome é diferente da variável $NOME.
echo '<br>';
echo $NOME; // Exibe 'Brito', já que é uma variável diferente da $nome.
?>
