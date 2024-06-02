<?php
    function showMessage(string $message) : void {
            echo $message . PHP_EOL;
        };

    function showMessageHTML(string $message) : void {
        echo "$message <br/>";
    };

    function deposit(float $balance, float $value) : float {
        if ($value > 0){
            $balance += $value;
        } else {
            showMessage('Deposit needs to be positive');
        }

        return $balance;
    }

    function withdraw(int $balance, int $value) : int {
        if ($value <= $balance) {
            $balance -= $value;
        } else {
            showMessage('You can\'t withdraw more than you have!');
        }
        
        return $balance;
    }