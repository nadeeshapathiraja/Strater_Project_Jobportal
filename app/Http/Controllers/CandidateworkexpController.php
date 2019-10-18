<?php

namespace App\Http\Controllers;

use App\candidateworkexp;
use Illuminate\Http\Request;

class CandidateworkexpController extends Controller
{

    public function index()
    {
        //$accounts = account::all();

        return view('candidateworkexps.index', compact('candidateworkexps'));
    }

    
    public function store(Request $request)
    {

        $request->validate([

            'employername' => 'required',
            'industry' => 'required',
            'position' => 'required',
            'salary' => 'required',
            
        ]);

        $candidateworkexp = new candidateworkexp([

            'employername' => $request->get('employername'),
            'industry' => $request->get('industry'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'position' => $request->get('position'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'still_working' => $request->get('still_working'),
            'salary' => $request->get('salary'),
            
        ]);

        $candidateworkexp->save();
        return redirect('/candidateworkexps')->with('success', ' Create Successfuly');

    }
    

    public function create(Request $request)
    {
        return view('candidateworkexps.create');
    }


    public function show(candidateworkexp $candidateworkexp)
    {
        //
    }

    
    public function edit(candidateworkexp $candidateworkexp)
    {
        //
    }

    
    public function update(Request $request, candidateworkexp $candidateworkexp)
    {
        //
    }

    
    public function destroy(candidateworkexp $candidateworkexp)
    {
        //
    }

}
