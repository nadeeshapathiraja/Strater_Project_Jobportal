<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{

    protected $primaryKey = 'account_id';

    protected $fillable = [

        'first_name',
        'last_name',
        'email',
        'password',
        
    ];
}
