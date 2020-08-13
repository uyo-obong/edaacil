<?php

namespace Edaacil\Modules\Manager\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id',
        'token',
        'status',
    ];

    /**
     * return certificate model
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }
}
