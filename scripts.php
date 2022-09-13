<?php

require __DIR__ . '/vendor/autoload.php';
$client = new Google\Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes('https://www.googleapis.com/auth/spreadsheets');
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    $service = new Google\Service\Sheets($client);
    $spreadsheetId = '14kZHyLCJE5VyDaldpFc8NGeWxptc11tWD8g16mfINDE';


global $error1, $error2, $error3, $token_message;