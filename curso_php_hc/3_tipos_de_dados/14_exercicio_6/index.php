<?php 
// Define um array associativo $carro, contendo informações sobre um carro.
$carro = [
    'marca' => 'BMW',
    'rodas' => '4',
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => false,
];

// Imprime uma representação do array $carro usando print_r(), exibindo todas as chaves e seus respectivos valores.
print_r($carro);

// Atribui o valor da chave 'marca' do array $carro à variável $marca.
$marca = $carro['marca'];

// Atribui o valor da chave 'velocidade_max' do array $carro à variável $velocidade_maxima.
$velocidade_maxima = $carro['velocidade_max'];

// Imprime uma quebra de linha (<br>).
echo '<br>';

// Imprime uma mensagem com informações sobre o carro, utilizando as variáveis $marca e $velocidade_maxima.
echo "O carro é da marca $marca e atinge no máximo $velocidade_maxima km/h"; 
?>
