<?php

namespace App\Http\Controllers;

use App\candidate_application;
use Illuminate\Http\Request;

class CandidateApplicationController extends Controller
{
   
    public function index()
    {
       // $candidate_applications = candidate_application::all();

        return view('candidate_applications.index', compact('candidate_applications'));
    }

   
    public function store(Request $request)
    {
        $request->validate([

        ]);

        $candidate_application = new candidate_application([
            // 'status' => $request->get('status'),
            // 'emp_status' => $request->get('emp_status'),
            // 'interview_status' => $request->get('interview_status'),
            // 'final_status' => $request->get('final_status'),
            'emp_action_by' => $request->get('emp_action_by'),
            'emp_action_at' => $request->get('emp_action_at'),
            'cand_action_at' => $request->get('cand_action_at'),
            
        ]);
        $candidate_application->save();
        return redirect('/candidate_applications')->with('success', 'Account Create Successfuly');
    }
    

    public function create(Request $request)
    {
        return view('candidate_applications.create');
    }

    
    public function show(candidate_application $candidate_application)
    {
        //
    }

    
    public function edit($candidate_application_id)
    {
        $candidate_application = candidate_application::find($candidate_application_id);
        return view('candidate_applications.edit', compact('candidate_application'));
    }

    
    public function update(Request $request, $candidate_application_id)
    {
        //
    }

    
    public function destroy($candidate_application_id)
    {
        $candidate_application = candidate_application::find($candidate_application_id);
        $candidate_application->delete();

        return redirect('/candidate_applications')->with('success', 'Application Deleted!');
    }
}
