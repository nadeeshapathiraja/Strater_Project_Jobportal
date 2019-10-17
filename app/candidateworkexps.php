<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidateworkexps extends Model
{

    protected $primaryKey = 'candidate_workexp_id';

    protected $fillable = [

        //'candidate_profile_id',
        'employername',
        'industry',
        'city',
        'country',
        'state',
        'position',
        'start_date',
        'end_date',
        'still_working',
        'salary',

    ];
}
