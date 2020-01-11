<?php

use GuzzleHttp\Client;

/**
 * Get current sms balance
 * @return string
 */
function checkSmsBalance()
{
    $client = new Client();

    $request = $client->post('http://api.smartsmssolutions.com/smsapi.php?', [
        'verify' => false,
        'form_params' => [
            'username'  => env('SMS_USERNAME'),
            'password'  => env('SMS_PASSWORD'),
            'balance'   => env('SMS_BALANCE')
        ],
    ]);

    return $request->getBody()->getContents();
}