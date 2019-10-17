<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateeducation extends Model
{

    protected $primaryKey = 'candidate_educ_id';

    protected $fillable = [

        //'candidate_profile_id',
        'degree',
        'school_type',
        'school_name',
        'city',
        'country',
        'state',
        'enrolldate',
        'still_studying',
        'grad_date',
        'exp_graddate',
        'is_graduated',
        'lastenrollyear',
        'future_study',
        'field_of_study',

    ];
}
