<?php

namespace App\Http\Controllers;

use App\candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = candidate::all();

        return view('candidates.index', compact('candidates'));
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
            'email' => 'required'
        ]);

        $candidate = new candidate([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'city' => $request->get('city'),
            'country' => $request->get('country')
        ]);
        $candidate->save();
        return redirect('/candidates')->with('success', 'Candidate Registration Successfull');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidates.register');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(candidate $candidate)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = candidate::find($id);
        return view('candidates.edit', compact('candidate'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);

        $candidate = candidate::find($id);
        $candidate->first_name =  $request->get('first_name');
        $candidate->last_name = $request->get('last_name');
        $candidate->email = $request->get('email');
        $candidate->job_title = $request->get('job_title');
        $candidate->city = $request->get('city');
        $candidate->country = $request->get('country');
        $candidate->save();

        return redirect('/candidates')->with('success', 'Candidate Profile Updated!');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate = candidate::find($id);
        $candidate->delete();

        return redirect('/candidates')->with('success', 'Candidate Deleted!');
    }
}
