<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate_application extends Model
{

    protected $primaryKey = 'candidate_application_id';

    protected $fillable = [
        
        //'candidate_profile_id',
        //'employer_profile_id',
        //'jobpost_id',
        'status',
        'emp_status',
        'interview_status',
        'final_status',
        'created_at',
        'updated_at',
        'emp_action_by',
        'emp_action_at',
        'cand_action_at',
        
    ];
}
