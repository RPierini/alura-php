<?php

$dados1 = [
    'Vinicius', 10, 24
];

list($nome, $nota, $idade) = $dados1;

var_dump($nome, $nota, $idade);

$dados2 = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados2;

extract($dados2);

var_dump($nome, $nota, $idade);

$dados3 = compact('nome', 'nota', 'idade');

var_dump($dados3);