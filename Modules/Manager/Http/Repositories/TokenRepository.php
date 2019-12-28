<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Modules\BaseRepository;

class TokenRepository extends BaseRepository
{
    /**
     * @return string
     */
    function model()
    {
        return "Edaacil\Modules\Manager\Http\Models\Token";
    }

    /**
     * Create token that has been generated
     * @param array $data
     * @return array|mixed
     * @throws \Exception
     */
    #this calls the generateToken Logic
    public function createToken(array $data)
    {
        $token = [];

        $tokens = $this->generateToken($data);

        foreach ($tokens as $token) {
           $token =  $this->model()::create([
                'id' => $this->generateUuid(),
                'token' => $token,
                'status' => 'Unused'
            ]);
        }

        return $token;
    }

    /**
     * Generate the random token in the format of 5316-3963-6376
     * @param $data
     * @return array
     */

    # This function generate tokens without and endpoint
    private function generateToken($data) :array
    {
        $data = (object)$data;

        $randomTokens = [];
        $i=1;
        do{
            $generateToken  = mt_rand(1000,9999) . '-' . mt_rand(1000,9999) . '-' . mt_rand(1000,9999);
            $i++;

            $randomTokens[] = $generateToken;
        } while($i<=$data->name) ;

        return $randomTokens;
    }
}