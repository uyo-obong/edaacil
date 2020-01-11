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
            'username'  => 'legendary1',
            'password'  => 'Excellentloaded1',
            'balance'   => true
        ],
    ]);

    return $request->getBody()->getContents();
}