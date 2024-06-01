<?php

$ageList = [21, 23, 19, 25, 30, 41, 18];

echo "one age " . $ageList[0] . PHP_EOL;

for ($i = 0; $i < count($ageList); $i++) {
    echo "age: " . $ageList[$i] . PHP_EOL;
}