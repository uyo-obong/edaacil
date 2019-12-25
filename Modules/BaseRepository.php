<?php


namespace Edaacil\Modules;


use Illuminate\Support\Str;
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
}
