<?php

namespace App\Http\Controllers;
use App\employerjobpost;
use Illuminate\Http\Request;

class EmployerjobpostController extends Controller
{

    public function index()
    {
        $employerjobposts = employerjobpost::all();

        return view('employerjobposts.index', compact('employerjobposts'));
    }


    public function store(Request $request)
    {
            
        $request->validate([

        ]);

        $employerjobpost = new employerjobpost([

            //'employer_profile_id' => $request->get('email'),
            'company_name' => $request->get('company_name'),
            'locality_city' => $request->get('locality_city'),
            'locality_country' => $request->get('locality_country'),
            'job_title' => $request->get('job_title'),
            'job_city' => $request->get('job_city'),
            'job_state' => $request->get('job_state'),
            'job_country' => $request->get('job_country'),
            'job_category' => $request->get('job_category'),
            'job_level' => $request->get('job_level'),
            'job_type' => $request->get('job_type'),
            'salary_currency' => $request->get('salary_currency'),
            'salary_max' => $request->get('salary_max'),
            'salary_min' => $request->get('salary_min'),
            'job_description' => $request->get('job_description'),
            'logo_url' => $request->get('logo_url'),
            'banner_url' => $request->get('banner_url'),
            'application_receive_mode' => $request->get('application_receive_mode'),
            'notification_type' => $request->get('notification_type'),
            'company_url' => $request->get('company_url'),
            'company_email' => $request->get('company_email'),
            'status' => $request->get('status'),
            'posted_at' => $request->get('posted_at'),
            'posted_by' => $request->get('posted_by'),
            'created_by' => $request->get('created_by'),
            'updated_by' => $request->get('updated_by'),
            'is_confidential' => $request->get('is_confidential'),

        ]);
        $employerjobpost->save();
        return redirect('/employerjobposts')->with('success');
    }


    public function create(Request $request)
    {
        return view('employerjobposts.create');
    }


    public function show(employerjobpost $employerjobpost)
    {
        //
    }


    public function edit($jobpost_id)
    {
        $account = account::find($jobpost_id);
        return view('employerjobposts.edit', compact('employerjobpost'));
    }


    public function update(Request $request, $jobpost_id)
    {
        $request->validate([

        ]);

        $employerjobpost = employerjobpost::find($jobpost_id);

        $employerjobpost->company_name = $request->get('company_name');
        $employerjobpost->locality_city =  $request->get('locality_city');
        $employerjobpost->locality_country = $request->get('locality_country');
        $employerjobpost->job_title = $request->get('job_title');
        $employerjobpost->job_city = $request->get('job_city');
        $employerjobpost->job_state = $request->get('job_state');
        $employerjobpost->job_country = $request->get('job_country');
        $employerjobpost->job_category = $request->get('job_category');
        $employerjobpost->job_level = $request->get('job_level');
        $employerjobpost->job_type = $request->get('job_type');
        $employerjobpost->salary_currency = $request->get('salary_currency');
        $employerjobpost->salary_max = $request->get('salary_max');
        $employerjobpost->salary_min = $request->get('salary_min');
        $employerjobpost->job_description = $request->get('job_description');
        $employerjobpost->logo_url = $request->get('logo_url');
        $employerjobpost->banner_url = $request->get('banner_url');
        $employerjobpost->application_receive_mode = $request->get('application_receive_mode');
        $employerjobpost->notification_type = $request->get('notification_type');
        $employerjobpost->company_url = $request->get('company_url');
        $employerjobpost->company_email = $request->get('company_email');
        $employerjobpost->status = $request->get('status');
        $employerjobpost->posted_at = $request->get('posted_at');
        $employerjobpost->posted_by = $request->get('posted_by');
        $employerjobpost->created_by = $request->get('created_by');
        $employerjobpost->updated_by = $request->get('updated_by');
        $employerjobpost->is_confidential = $request->get('is_confidential');

        $employerjobpost->save();

        return redirect('/employerjobposts')->with('success');
    }


    public function destroy($jobpost_id)
    {
        $employerjobpost = employerjobpost::find($jobpost_id);
        $employerjobpost->delete();

        return redirect('/employerjobposts')->with('success');
    }
}
