<?php

namespace Edaacil\Modules\Client\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'message'
    ];
}
