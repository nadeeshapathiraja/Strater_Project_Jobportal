<?php

namespace App\Http\Controllers;

use App\candidateeducation;
use Illuminate\Http\Request;

class CandidateeducationController extends Controller
{
    
    public function index()
    {
        //$candidateprofiles = candidateprofile::all();
        return view('candidateeducations\index', compact('candidateeducations'));

    }

    

    public function store(Request $request)
    {
        $request->validate([

            'degree' => 'required',
            // 'school_name' => 'required',
            // 'city' => 'required',

        ]);

        $candidateeducation = new candidateeducation([
            
            //'candidate_profile_id' => $request->get('candidate_profile_id'),
            'degree' => $request->get('degree'),
            'school_type' => $request->get('school_type'),
            'school_name' => $request->get('school_name'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'enrolldate' => $request->get('enrolldate'),
            'still_studying' => $request->get('still_studying'),
            'grad_date' => $request->get('grad_date'),
            'exp_graddate' => $request->get('exp_graddate'),
            'is_graduated' => $request->get('is_graduated'),
            'lastenrollyear' => $request->get('lastenrollyear'),
            'future_study' => $request->get('future_study'),
            'field_of_study' => $request->get('field_of_study'),
            
        ]);
        $candidateeducation->save();
        return redirect('/candidateeducations')->with('success', 'Account Create Successfuly');
    }

    public function create(Request $request)
    {
        return view('candidateeducations.create');
    }


    public function show(candidateeducation $candidateeducation)
    {
        //
    }


    public function edit(candidateeducation $candidateeducation)
    {
        //
    }


    public function update(Request $request, candidateeducation $candidateeducation)
    {
        //
    }


    public function destroy(candidateeducation $candidateeducation)
    {
        //
    }
}
