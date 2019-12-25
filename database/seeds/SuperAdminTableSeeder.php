<?php

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminTableSeeder extends Seeder
{
    private $baseRepository;
    public function __construct(BaseRepository $baseRepository)
    {
        $this->baseRepository=$baseRepository;
    }

    function model(){
        return Manager::class;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       return Manager::create([
            'id'=>$this->baseRepository->generateUuid(),
            'first_name'=> 'John',
            'last_name'=> 'Doe',
            'email'=>'johndoe@gmail.com',
            'phone_number'=>01010101010,
            'role'=>'Manager',
            'status'=>'Active',
            'address'=>'100 units',
            'city'=>'Uyo',
            'state'=>'AkwaIbom',
            'country'=>'Nigeria',
            'password'=>Hash::make('password'),
        ]);
    }
}
