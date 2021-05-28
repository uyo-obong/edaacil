<?php


namespace Edaacil\Modules;


use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;

abstract class BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract public function model();

    /**
     * Generates UuId
     * @return mixed
     * @throws Exception
     */
    public function generateUuid()
    {
        return Uuid::uuid4()->toString();
    }


    /**
     * @param $text
     * @return string|string[]
     */
    public function slugIt($text)
    {
        return str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($text))));
    }


    /**
     * return client phone number and the message
     * @param $data
     * @return ResponseInterface
     */
    public function getClientNumber($data): ResponseInterface
    {
        $phone_number = $data->phone_number;

        $message = "WELCOME TO EDAA INSURANCE THANKS FOR PATRONAGE. DRIVE SAFELY.";

        return $this->initiateSmsGuzzle($phone_number, $message);

    }


    /**
     * Implement guzzle api
     * @param $phone_number
     * @param $message
     * @return ResponseInterface
     */
    public function initiateSmsGuzzle($phone_number, $message): ResponseInterface
    {
        $client = new Client();

        return $client->post('http://api.smartsmssolutions.com/smsapi.php?', [
            'verify' => false,
            'form_params' => [
                'username'  => Config::get('app.sms_username'),
                'password'  => Config::get('app.sms_password'),
                'message'   => $message,
                'sender'    => Config::get('app.sms_sender'),
                'recipient' => $phone_number,
            ],
        ]);
    }

}
