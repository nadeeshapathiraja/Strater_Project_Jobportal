<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeeprofile extends Model
{

    protected $primaryKey = 'employer_profile_id';

    protected $fillable = [
        
        //'account_id',
        'main_account',
        'credits',
        'parent_account',
        'contact_person',
        'contact_position',
        'contact_email',
        'contact_number',
        'name',
        'headline',
        'description',
        'recruitment_type',
        'industry',
        'employee_size',
        'address',
        'city',
        'zip',
        'state',
        'country',
        'website',
        'crunchbase_url',
        'facebook_url',
        'twitter_url',
        'video_url',
        'logo_url',
        'banner_url',
        'profile_url',
        'profile_alt_url',
        'lat',
        'lng',
        'created_date',
        'modified_date',
    ];
}
