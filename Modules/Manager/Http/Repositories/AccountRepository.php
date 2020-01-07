<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use Edaacil\Mail\SendWelcomeEmailToNewAgent;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class AccountRepository extends BaseRepository
{

    function model()
    {
        return Manager::class;
    }

    /**
     * Create account
     * @param array $agentData
     * @return mixed
     * @throws \Exception
     */
    public function createAccount(array $agentData)
    {

        $data = (object)$agentData;
        // Available alphabetical characters
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // generate a pin based on 2 * 3 digits + a random character
        $pin = mt_rand(100, 999) . mt_rand(100, 999) . $characters[rand(2, strlen($characters) - 3)];
        // shuffle the result
        $string = str_shuffle($pin);

        $manager = $this->model()::create([
            'id' => $this->generateUuid(),
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'phone_no' => $data->phone_no,
            'role' => $data->role,
            'status' => 'Active',
            'address' => $data->address,
            'city' => $data->city,
            'state' => $data->state,
            'country' => $data->country,
            'password' => Hash::make($string),
        ]);

        Mail::to($data->email)->send(new SendWelcomeEmailToNewAgent($manager, $string));
    }

    /**
     * Update account
     * @param array $request
     * @return mixed
     */
    public function updateAccount(array $request)
    {
        $data = (object)$request;

        $manager = $this->model()::where('id', $data->accountId)->first();
        return $manager->update([
            'email' => $data->email,
            'status' => $data->status,
        ]);
    }


    public function updateManagerInformation(array $request)
    {
        $data = (object)$request;

//        $fileName = 'profile_image'.time().'.'.request()->profile_image->getClientOriginalExtension();

//        $storage = $request['profile_image']->store('profile-images','public');



        $manager = $this->model()::where('id', $data->managerId)->first();

        return $manager->update([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'phone_no' => $data->phone_no,
            'address' => $data->address,
            'city' => $data->city,
            'state' => $data->state,
            'country' => $data->country,
//            'profile_image'=>$storage,
        ]);

    }

    public function managerChangePassword($data){
        $data = (object) $data;
        $manager = $this->model()::where('id', auth()->user()->id)->where('email', auth()->user()->email)->first();
        return $manager->update([
            'password'=>Hash::make($data->password),
        ]);
    }






}