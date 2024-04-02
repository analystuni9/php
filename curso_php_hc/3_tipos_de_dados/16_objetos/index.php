<?php 
class Pessoa {
    function falar(){
        echo "Olá pessoal!";
    }
}
$danilo = new Pessoa();
$danilo->nome = "Danilo";
echo $danilo->nome;
echo '<br>';