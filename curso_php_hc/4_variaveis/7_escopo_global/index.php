<?php

$teste = 'asd';
echo "$teste teste global 1";
echo '<br>';
if(true){
    $teste = 'dsa';
    echo "$teste teste if local";
    echo '<br>';
}
echo "$teste teste global 2";
echo '<br>';
function funcao(){
    $teste = 'xsw';
    echo "$teste teste local função";
    echo '<br>';

}
funcao();
function fGlobal(){
    global $teste;
    $teste = 2;
    echo "$teste testando função gobal";
    echo '<br>';
}
fGlobal();
echo "$teste teste global 3";
echo '<br>';