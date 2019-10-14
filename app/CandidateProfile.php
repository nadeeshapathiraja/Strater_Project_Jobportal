<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    protected $fillable = [

        'account_id',
        'profile_image',
        'firstname',
        'lastname',
        'mobile',
        'telephone',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'zipcode',
        'profile_picture',
        'fresh_graduate',
        'nationality',
        'country_residingin',
        'state_residingin',
        'working_since',
        'prefered_category',
        'prefered_level',
        'prefered_type',
        'prefered_salary_currency',
        'prefered_salary',
        'prefered_location',
        'about_myself',
        'gender',
        'date_of_birth',
        'core_skills',
        'race',
        'prefered_location2',
        'prefered_location3',
        'prefered_industry',
        'acc_name',
        'acc_no',
        'bank',
        
    ];
}
