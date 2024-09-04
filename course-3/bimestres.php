<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

$notasBimestre2 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 6
];

// Valores presente no primeiro array mas não nos demais
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// chaves presentes no primeiro array mas não nos demais
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// Associação chaves = valor presentes no primeiro array mas não nos demais
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

// Retorna as chaves como um Array
var_dump(array_keys($alunosFaltantes));
$nomesAlunos = array_keys($alunosFaltantes);

// Retorna os valores como um Array
var_dump(array_values($alunosFaltantes));
$notasAlunos = array_values($alunosFaltantes);

// Combina os valores, informando Chave e Valor
var_dump(array_combine($notasAlunos, $nomesAlunos));

// Inverte Chave e Valor de um array associativo (chave => valor vira valor => chave)
var_dump(array_flip($alunosFaltantes));