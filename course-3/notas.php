<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
    'Rodrigo' => null,
];

arsort($notas);

var_dump($notas);

// Verifica se é um array
var_dump(is_array($notas));

// Verifica se é uma lista (array numérico sequencial)
var_dump(array_is_list($notas));

// Verifica se uma chave do array existe
var_dump(array_key_exists('Rodrigo', $notas));

// Verifica se um valor existe em um array
var_dump(in_array(6, $notas));

// Verifica se o valor retornado não é nulo
var_dump(isset($notas['Rodrigo']));

// Procura a chave que possui um valor no array
echo array_search(6, $notas);