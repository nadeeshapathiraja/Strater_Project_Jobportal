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

    
    public function edit(candidatepreference $candidatepreference)
    {
        //
    }

    
    public function update(Request $request, candidatepreference $candidatepreference)
    {
        //
    }

    
    public function destroy(candidatepreference $candidatepreference)
    {
        //
    }
}
