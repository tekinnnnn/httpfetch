<?php

require __DIR__.'/../vendor/autoload.php';

use function chh\httpfetch\fetch;

fetch('http://www.example.com')
    ->then(function ($response) {
        echo $response['status'], "\n";
        return fetch('http://www.example.com');
    })
    ->then(function ($response) {
        echo $response['status'], "\n";
    });
