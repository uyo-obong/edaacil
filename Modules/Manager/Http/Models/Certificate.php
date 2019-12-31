<?php

namespace Edaacil\Modules\Manager\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id',
        'manager_id',
        'token_id',
        'email',
        'phone_number',
        'certificate_number',
        'policy_number',
        'index_mark',
        'plate_number',
        'chassis_number',
        'make_of_vehicle',
        'name_of_policy_holder',
        'registration_date',
        'expiring_date',
        'type_of_cover',
    ];

    /**
     * Return manager model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager()
    {
        return $this->belongsTo(Manager::class, 'manager_id');
    }

    /**
     * Return token model
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function token()
    {
        return $this->belongsTo(Token::class, 'token_id');
    }
}
