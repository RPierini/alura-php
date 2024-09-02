<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ]
];

$notasOrdenadas = $notas;

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notasOrdenadas, 'ordenaNotas');

echo "notas desordenadas:";
var_dump($notas);

echo "notas Ordenadas:";
var_dump($notasOrdenadas);