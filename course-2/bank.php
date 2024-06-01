<?php
    
require_once ('functions.php');

    $currentAccounts = [
        '123.456.789-00' => [
            'name' => 'Vinicius',
            'balance' => 1000
        ], 
        '123.456.789-01' => [
            'name' => 'Maria',
            'balance' => 10000
        ], 
        '123.456.789-02' => [
            'name' => 'Alberto',
            'balance' => 300
        ]
    ];

    foreach ($currentAccounts as $cpf => $account) {
        ['name' => $name, 'balance' => $balance] = $account;
        showMessage("cpf: $cpf name: $name balance: $balance");
    };

    $currentAccounts['123.456.789-00']['balance'] = withdraw($currentAccounts['123.456.789-00']['balance'], 500);
    $currentAccounts['123.456.789-02']['balance'] = deposit($currentAccounts['123.456.789-02']['balance'], 10.5);

    foreach ($currentAccounts as $cpf => $account) {
        showMessage("cpf: $cpf name: {$account['name']} balance: {$account['balance']}");
    };

    unset($currentAccounts['123.456.789-01']);

    foreach ($currentAccounts as $cpf => $account) {
        showMessage("cpf: $cpf name: {$account['name']} balance: {$account['balance']}");
    };