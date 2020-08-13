<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

/**
 * Get current sms balance
 * @return string
 */
function checkSmsBalance()
{
    $client = new Client();

    try {

        $request = $client->post('http://api.smartsmssolutions.com/smsapi.php?', [
            'verify' => false,
            'form_params' => [
                'username'  => Config::get('app.sms_username'),
                'password'  => Config::get('app.sms_password'),
                'balance'   => Config::get('app.sms_balance')
            ],
        ]);


        return $request->getBody()->getContents();

    } catch (exception $e) {
       session()->flash('danger', 'Your sms balance is low');
    }






}

