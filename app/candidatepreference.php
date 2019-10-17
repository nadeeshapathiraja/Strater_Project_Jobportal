<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidatepreference extends Model
{
    protected $primaryKey = 'candidate_preference_id';
    
    protected $fillable = [

        //'candidate_profile_id',
        'specialization',
        'location_country',
        'location_state',
        'salary_currency',
        'salary_amount',

    ];
}
