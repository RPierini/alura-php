<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em Português é $nomeNumero" . PHP_EOL;
};

echo count($array);