<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

/**
 * Get current sms balance
 * @return string
 */
function checkSmsBalance(): string
{

    try {

        $response = Http::post('https://api.bulksmslive.com/v2/app/getbalance', [
            'email'  => Config::get('app.sms_username'),
            'password'  => Config::get('app.sms_password'),
        ]);

        $data = (object)$response->json();

        return $data->amount;

    } catch (exception $e) {
        session()->flash('danger', 'Your sms balance is low');
    }






}

