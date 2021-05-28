<?php

namespace Edaacil\Modules\Manager\Http\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Manager extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'role',
        'status',
        'address',
        'city',
        'state',
        'country',
        'password',
        'profile_image',
];
    /**
     * @var bool
     */
    public $incrementing = false;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Return full name
     * @return string
     */
    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * return certificate model
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'certificate_id');
    }
}
