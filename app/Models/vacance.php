<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacance extends Model
{
    use HasFactory;

    protected $fillable = [
    'identification_number',
    'holiday_type',
    'start_date',
    'end_date',
    'days_number',
    'call_number',
    'user_trust_data_user',

    'managerial_review',
    'replacer_id',
    'admin_trust_data',

    'entitlements',
    'total_entitlements',
    'requested_days',
    'remaining',
    'administration_trust_data',

    'ceo_auth',
    'status',
];


    /**
     * Relationship to the employee who created the request
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'identification_number');
    }
}
