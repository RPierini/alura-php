<?php
    $currentAccounts = [
        12345678900 => [
            'name' => 'Vinicius',
            'balance' => 1000
        ], 
        12345678901 => [
            'name' => 'Maria',
            'balance' => 10000
        ], 
        12345678902 => [
            'name' => 'Alberto',
            'balance' => 300
        ]
    ];

    foreach ($currentAccounts as $cpf => $account) {
        echo 'cpf: ' . $cpf . " | name: " . $account['name'] . ' | balance: ' . $account['balance'] . PHP_EOL;
    }