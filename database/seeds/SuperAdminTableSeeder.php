<?php

use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
       Manager::create([
            'id'=> Uuid::uuid4()->toString(),
            'first_name'=> 'John',
            'last_name'=> 'Doe',
            'email'=>'godwin@edaacil.com',
            'phone_no'=>'070********',
            'role'=>'Manager',
            'status'=>'Active',
            'profile_image' => '',
            'address'=>'100 units',
            'city'=>'Uyo',
            'state'=>'Akwa Ibom',
            'country'=>'Nigeria',
            'password'=>Hash::make('GodwinEdoho*#@19'),
        ]);
    }
}
