<?php

namespace App\Http\Controllers;

use App\candidateeducation;
use Illuminate\Http\Request;

class CandidateeducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$candidateprofiles = candidateprofile::all();
        return view('candidateprofiles\index', compact('candidateprofiles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidateeducation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'degree' => 'required',
            'school_name' => 'required',
            'city' => 'required',

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
            'grad_date' => $request->get('grad_date'),
            'exp_graddate' => $request->get('exp_graddate'),
            'is_graduated' => $request->get('is_graduated'),
            'lastenrollyear' => $request->get('lastenrollyear'),
            'future_study' => $request->get('future_study'),
            'field_of_study' => $request->get('field_of_study'),
            
        ]);
        $candidateeducation->save();
        return redirect('/candidateprofiles')->with('success', 'Account Create Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\candidateeducation  $candidateeducation
     * @return \Illuminate\Http\Response
     */
    public function show(candidateeducation $candidateeducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\candidateeducation  $candidateeducation
     * @return \Illuminate\Http\Response
     */
    public function edit(candidateeducation $candidateeducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\candidateeducation  $candidateeducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, candidateeducation $candidateeducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\candidateeducation  $candidateeducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(candidateeducation $candidateeducation)
    {
        //
    }
}
