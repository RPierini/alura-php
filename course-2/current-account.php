<?php
    $account1 = [
        'name' => 'Vinicius',
        'balance' => 1000
    ];

    $account2 = [
        'name' => 'Maria',
        'balance' => 10000
    ];

    $account3 = [
        'name' => 'Alberto',
        'balance' => 300
    ];
    
    $currentAccounts = [$account1, $account2, $account3];

    for ($i=0; $i < count($currentAccounts);$i++){
        echo "name: " . $currentAccounts[$i]['name'] . PHP_EOL;
    }