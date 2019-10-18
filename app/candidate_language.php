<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate_language extends Model
{

    protected $primaryKey = 'candidate_lang_id';

    protected $fillable = [
        //'candidate_profile_id',
        'language_code',
        'spoken_level',
        'written_level',
        'default',
    ];
}
