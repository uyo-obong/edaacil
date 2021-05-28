<?php
namespace Edaacil\Modules\Client\Http\Repositories;

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Client\Models\Contact;

class ClientRepository extends BaseRepository{

    function model()
    {
        return Contact::class;
    }

    public function createContact(array $clientData){
        $data = (object) $clientData;
        try {
            return $this->model()::create([
                'id' => $this->generateUuid(),
                'name' => $data->name,
                'email' => $data->email,
                'subject' => $data->subject,
                'message' => $data->message
            ]);

        } catch (\Exception $e) {
        }
    }


}
