<?php 
// Define a classe Pessoa
class Pessoa {
    // Método falar da classe Pessoa
    function falar(){
        echo "Olá pessoal!";
    }
}

// Instancia um objeto da classe Pessoa chamado $danilo
$danilo = new Pessoa();

// Define a propriedade nome do objeto $danilo como "Danilo"
$danilo->nome = "Danilo";

// Imprime o valor da propriedade nome do objeto $danilo
echo $danilo->nome;
echo '<br>';
?>
