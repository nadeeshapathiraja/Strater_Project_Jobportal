<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employerjobpost extends Model
{

    protected $primaryKey = 'jobpost_id';

    protected $fillable = [

        //'employer_profile_id',
        'company_name',
        'locality_city',
        'locality_country',
        'job_title',
        'job_city',
        'job_state',
        'job_country',
        'job_category',
        'job_level',
        'job_type',
        'salary_currency',
        'salary_max',
        'salary_min',
        'job_description',
        'logo_url',
        'banner_url',
        'application_receive_mode',
        'notification_type',
        'company_url',
        'company_email',
        'status',
        'posted_at',
        'posted_by',
        'created_by',
        'updated_by',
        'is_confidential',
        
    ];
}
