<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'city',
        'country',
        'job_title'
    ];

}
