<?php

namespace App\Http\Controllers;

use App\candidatepreference;
use Illuminate\Http\Request;

class CandidatepreferenceController extends Controller
{
    
    public function index()
    {
        //$candidatepreferences = candidatepreference::all();

        return view('candidatepreferences.index', compact('candidatepreferences'));
    }

   
    public function store(Request $request)
    {
        $request->validate([

            'location_country' => 'required',
            'location_state' => 'required',
            'salary_amount' => 'required',
            
        ]);

        $candidatepreference = new candidatepreference([

            'specialization' => $request->get('specialization'),
            'location_country' => $request->get('location_country'),
            'location_state' => $request->get('location_state'),
            'salary_currency' => $request->get('salary_currency'),
            'salary_amount' => $request->get('salary_amount'),
            
        ]);
        $candidatepreference->save();
        return redirect('/candidatepreferences')->with('success', 'Account Create Successfuly');
    }

        
    public function create(Request $request)
    {
        return view('candidatepreferences.create');
    }

    
    public function show(candidatepreference $candidatepreference)
    {
        //
    }

    
    public function edit($candidate_preference_id)
    {
        $candidatepreference = candidatepreference::find($candidate_preference_id);
        return view('candidatepreferences.edit', compact('candidatepreference'));
    }

    
    public function update(Request $request, $candidate_preference_id)
    {
        $request->validate([
            
        ]);

        $candidatepreference = candidatepreference::find($candidate_preference_id);
        
        $candidatepreference->specialization =  $request->get('specialization');
        $candidatepreference->location_country = $request->get('location_country');
        $candidatepreference->location_state = $request->get('location_state');
        $candidatepreference->salary_currency = $request->get('salary_currency');
        $candidatepreference->salary_amount = $request->get('salary_amount');

        $candidatepreference->save();

        return redirect('/candidatepreferences')->with('success', 'Update Successfull!');
    }

    
    public function destroy($candidate_preference_id)
    {
        $candidatepreference = candidatepreference::find($candidate_preference_id);
        $candidatepreference->delete();

        return redirect('/candidatepreferences')->with('success', 'Account Deleted!');
    }
}
