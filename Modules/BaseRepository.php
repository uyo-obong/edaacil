<?php


namespace Edaacil\Modules;


use GuzzleHttp\Client;
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
     * @throws \Exception
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
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getClientNumber($data)
    {
        $phone_number = $data->phone_number;

        $message = "Your certificate is ready. thank you for using our service. EDAACIL";

        return $this->initiateSmsGuzzle($phone_number, $message);

    }


    /**
     * Implement guzzle api
     * @param $phone_number
     * @param $message
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function initiateSmsGuzzle($phone_number, $message)
    {
        $client = new Client();

        return $client->post('http://api.smartsmssolutions.com/smsapi.php?', [
            'verify' => false,
            'form_params' => [
                'username'  => env('SMS_USERNAME'),
                'password'  => env('SMS_PASSWORD'),
                'message'   => $message,
                'sender'    => env('SMS_SENDER'),
                'recipient' => $phone_number,
            ],
        ]);
    }

}
