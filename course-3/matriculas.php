<?php

$alunos2021 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Vinicius'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

//Junta dois arrays sem preservar chaves
$alunos2022 = array_merge($alunos2021, $novosAlunos);

// Adiciona elementos ao final do array
array_push($alunos2022, 'alice', 'bob', 'charlie');

var_dump($alunos2022);

// Adiciona elementos ao início do array
array_unshift($alunos2022, 'Stephane', 'Rafaela');

var_dump($alunos2022);

// Remove elementos no início do array
array_shift($alunos2022);

var_dump($alunos2022);

// Remove elementos ao fim do array
array_pop($alunos2022);

var_dump($alunos2022);