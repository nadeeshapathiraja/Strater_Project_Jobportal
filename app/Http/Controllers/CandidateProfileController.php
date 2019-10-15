<?php

namespace App\Http\Controllers;

use App\CandidateProfile;
use Illuminate\Http\Request;

class CandidateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidateProfiles = candidateProfile::all();

        return view('CandidateProfile\index', compact('candidateProfiles'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',//|min:6|confirmed',
            //'password_confirmation' => 'required|min:6'
        ]);

        $account = new account([
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
            
        ]);
        $account->save();
        return redirect('/accounts')->with('success', 'Account Create Successfuly');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CandidateProfile  $candidateProfile
     * @return \Illuminate\Http\Response
     */
    public function show(CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CandidateProfile  $candidateProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CandidateProfile  $candidateProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CandidateProfile  $candidateProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidateProfile $candidateProfile)
    {
        //
    }
}
